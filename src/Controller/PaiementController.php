<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Commandes;
use App\Entity\Categories;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use App\Entity\Produits;
use App\Entity\CommandesProduits;
use App\Form\CommandesType;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


final class PaiementController extends AbstractController
{


    #[Route('/create-checkout-session', name: 'app_create_checkout_session', methods: ['POST'])]
    public function createCheckoutSession(Request $request, SessionInterface $session): JsonResponse
    {

        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
        $commande = $session->get('commande');

        if (!$commande) {
            return new JsonResponse(['error' => 'Aucune commande trouvée'], 400);
        }

        $lineItems = [];

        $data = \json_decode($request->getContent(), true);

        foreach ($data['items'] as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $item['price'] * 100, // Convertir en centimes
                    'product_data' => [
                        'name' => $item['name'],
                    ],
                ],
                'quantity' => $item['quantity'],
            ];
        }

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_success', [], UrlGeneratorInterface::ABSOLUTE_URL) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => $this->generateUrl('app_commandes_new', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        return new JsonResponse(['id' => $checkout_session->id]);
    }



    #[Route('/success', name: 'app_success')]
    public function success(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, SessionInterface $session): Response
    {
        $sessionId = $request->query->get('session_id');
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
        $session = Session::retrieve($sessionId);

        if ($session->payment_status === 'paid') {
            $commande = $request->getSession()->get('commande');

            if (!$commande) {
                throw new \Exception('Commande introuvable');
            }
            $montantTotalCommande = 0;
            foreach ($commande->getCommandeProduits() as $produitCommande) {
                $produit = $produitCommande->getProduit();
                $quantite = $produitCommande->getQuantite();
                $prix = $produit->getPrix();
                $montantProduit = $prix * $quantite;
                $produitCommande->setmontant($montantProduit); // Enregistrer le montant individuel
                $montantTotalCommande += $montantProduit;
                $produitExistant = $entityManager->getRepository(Produits::class)->find($produit->getId());

                //déduction stock
                if ($produitExistant) {
                    $ancienneQuantite = $produitExistant->getQuantite();
                    $nouvelleQuantite = $ancienneQuantite - $quantite;
                    if ($nouvelleQuantite < 0) $nouvelleQuantite = 0;
                    $produitExistant->setQuantite($nouvelleQuantite);
                    $entityManager->persist($produitExistant);
                    $produit = $produitExistant; // réassignation
                }

                if ($produit && $produit->getIdCategorie()) {
                    $categorie = $entityManager->getRepository(Categories::class)->find($produit->getIdCategorie()->getId());
                    if ($categorie) {
                        $produit->setIdCategorie($categorie); // Réattache la catégorie existante
                    }
                }
                $produitCommande->setProduit($produit);
                $produitCommande->setCommande($commande); 
                $entityManager->persist($produitCommande); 
            }
            $commande->setStatut(0);
            $commande->setMontantTotal($montantTotalCommande);

            $commande->setDateCommande(new \DateTime('now', new \DateTimeZone('Europe/Paris')));

            $entityManager->persist($commande);
            $entityManager->flush();

            // Envoi des emails
            $emailMagasin = (new Email())
                ->from('adanelylia@gmail.com')
                ->to('lyliaadn@gmail.com')
                ->subject('Nouvelle Commande Reçue')
                ->html($this->renderView('commandes/nouvelle_commande.html.twig', [
                    'commande' => $commande,
                ]));

            $mailer->send($emailMagasin);

            $emailClient = (new Email())
                ->from('adanelylia@gmail.com')
                ->to($commande->getMailClient())
                ->subject('Confirmation de votre commande')
                ->html($this->renderView('commandes/confirmation_commande_client.html.twig', [
                    'commande' => $commande,
                ]));

            $mailer->send($emailClient);


            $request->getSession()->remove('commande');

            return $this->render('paiement/success.html.twig');
        }

        return $this->redirectToRoute('app_commandes_new');
    }
}
