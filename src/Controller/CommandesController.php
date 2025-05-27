<?php

namespace App\Controller;

use App\Entity\Commandes;
use App\Entity\Produits;
use App\Entity\CommandesProduits;
use App\Form\CommandesType;
use App\Repository\CommandesProduitsRepository;
use App\Repository\CommandesRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/commandes')]
final class CommandesController extends AbstractController
{
    #[Route(name: 'app_commandes_index', methods: ['GET'])]
    public function index(CommandesRepository $commandesRepository): Response
    {
        return $this->render('commandes/index.html.twig', [
            'commandes' => $commandesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commandes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, SessionInterface $session): Response
    {
    

        $produits = $entityManager->getRepository(Produits::class)->findAll(); // Récupérer les produits
        $commande = new Commandes();
        $commande->setStatut(0);
        $commande->setDateCommande(new \DateTime('now', new \DateTimeZone('Europe/Paris')));

        $panier = $session->get('panier', []);

        foreach ($panier as $id => $quantity) {
            $produit = $entityManager->getRepository(Produits::class)->find($id);
            if ($produit) {
                $commandeProduit = new CommandesProduits();
                $commandeProduit->setProduit($produit);
                $commandeProduit->setQuantite($quantity);
                $commande->addCommandeProduit($commandeProduit);
            }
        }

        // Exemple : récupérer les produits à partir du panier (ou autre logique)
        //$produitsCommandes = $entityManager->getRepository(CommandesProduits::class)->findBy(['commande' => null]); 
        //foreach ($produitsCommandes as $produitCommande) {
        //    $commande->addCommandeProduit($produitCommande);
        //}
    
        $form = $this->createForm(CommandesType::class, $commande);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($commande->getCommandeProduits() as $commandeProduit) {
                $commandeProduit->setCommande($commande);
                $commandeProduit->setMontant($commandeProduit->getProduit()->getPrix() * $commandeProduit->getQuantite());

                // Déduire la quantité du produit
                $produit = $commandeProduit->getProduit();
                $ancienneQuantite = $produit->getQuantite();
                $nouvelleQuantite = $ancienneQuantite - $commandeProduit->getQuantite();
                $produit->setQuantite($nouvelleQuantite);

                $entityManager->persist($produit);

                $entityManager->persist($commandeProduit);
            }
            $commentaires = $form->get('commentaires')->getData();
            $commande->setCommentaires($commentaires);

            $entityManager->persist($commande);
            $entityManager->flush();

            $emailMagasin = (new Email())
            ->from('lyliaadn@gmail.com')
            ->to('lyliaadn@gmail.com')  // Email du responsable du magasin
            ->subject('Nouvelle Commande Reçue')
            ->html($this->renderView('commandes/nouvelle_commande.html.twig', [
                'commande' => $commande,
                'commentaires' => $commentaires, 
            ]));

        $mailer->send($emailMagasin);

        $emailClient = (new Email())
        ->from('lyliaadn@gmail.com')  // Adresse de l'expéditeur (magasin)
        ->to($commande->getMailClient())  // Email du client récupéré depuis la commande
        ->subject('Confirmation de votre commande')
        ->html($this->renderView('commandes/confirmation_commande_client.html.twig', [
            'commande' => $commande,
            'commentaires' => $commentaires,
        ]));

        $mailer->send($emailClient);
    
            //return $this->redirectToRoute('app_commandes_new');

            $session->set('commande', $commande);    
            return $this->redirectToRoute('app_create_checkout_session');
        }
    
    
        return $this->render('commandes/new.html.twig', [
            'form' => $form->createView(),
            'commande' => $commande,
            'stripe_public_key' => $_ENV['STRIPE_PUBLIC_KEY']
        ]);

    }

    #[Route('/store', name: 'app_commande_store', methods: ['POST'])]
    public function storeCommande(Request $request, SessionInterface $session): JsonResponse
    {
        $commande = new Commandes();
        $form = $this->createForm(CommandesType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session->set('commande', $commande);
            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false]);
    }


    #[Route('/{id}', name: 'app_commandes_show', methods: ['GET'])]
    public function show(Commandes $commande): Response
    {
        return $this->render('commandes/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/suivi/{id}', name: 'app_commandes_suivi', methods: ['GET'])]
    public function suivi(Commandes $commande): Response
    {
        return $this->render('commandes/suivi.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commandes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commandes $commande, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $oldCommande = clone $entityManager->getRepository(Commandes::class)->find($commande->getId());
        $oldCommandeProduits = [];
        foreach ($oldCommande->getCommandeProduits() as $oldCP) {
            $oldCommandeProduits[$oldCP->getProduit()->getId()] = $oldCP->getQuantite();
        }

        $form = $this->createForm(CommandesType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $produitsSupprimes = [];

        foreach ($oldCommandeProduits as $prodId => $oldQty) {
            $found = false;
            foreach ($commande->getCommandeProduits() as $newCP) {
                if ($newCP->getProduit()->getId() === $prodId) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $produitsSupprimes[$prodId] = $oldQty;
            }
        }

        foreach ($produitsSupprimes as $prodId => $qtySupprimee) {
            $produit = $entityManager->getRepository(Produits::class)->find($prodId);
            $produit->setQuantite($produit->getQuantite() + $qtySupprimee);
            $entityManager->persist($produit);
        }

        // 2) Mettre à jour les quantités modifiées / ajoutées
        foreach ($commande->getCommandeProduits() as $newCP) {
            $prodId = $newCP->getProduit()->getId();
            $oldQty = $oldCommandeProduits[$prodId] ?? 0;
            $newQty = $newCP->getQuantite();

            $diff = $oldQty - $newQty; // positif si on a réduit la quantité (on ajoute du stock), négatif si on a augmenté

            $produit = $newCP->getProduit();
            $produit->setQuantite($produit->getQuantite() + $diff);
            $entityManager->persist($produit);

            // mettre à jour le montant du produit dans la commande
            $newCP->setMontant(bcmul($produit->getPrix(), (string) $newQty, 2));
            $newCP->setCommande($commande);
        }

        // Synchronisation de la collection (supprimer les produits supprimés de la collection)
        foreach ($commande->getCommandeProduits() as $cp) {
            if ($cp->getProduit() === null) {
                $commande->removeCommandeProduit($cp);
            }
        }
            $commentaires = $form->get('commentaires')->getData();
            $commande->setCommentaires($commentaires);
            $commande->setDateCommande(new \DateTime('now', new \DateTimeZone('Europe/Paris')));

            $entityManager->flush();

            $emailMagasin = (new Email())
            ->from('adanelylia@gmail.com')
            ->to('lyliaadn@gmail.com')  // Email du responsable du magasin
            ->subject('Modification d une Commande Reçue')
            ->html($this->renderView('commandes/modification_commande.html.twig', [
                'commande' => $commande,
                'commentaires' => $commentaires, 
            ]));

        $mailer->send($emailMagasin);

        $emailClient = (new Email())
        ->from('adanelylia@gmail.com')  // Adresse de l'expéditeur (ton adresse)
        ->to($commande->getMailClient())  // Email du client récupéré depuis la commande
        ->subject('Modification de votre commande')
        ->html($this->renderView('commandes/modification_commande_client.html.twig', [
            'commande' => $commande,
            'commentaires' => $commentaires,
        ]));

        $mailer->send($emailClient);

        $this->addFlash('success', 'Commande modifié avec succès.');

            return $this->redirectToRoute('app_commandes_show', ['id' => $commande->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commandes/edit.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commandes_delete', methods: ['POST'])]
    public function delete(Request $request, Commandes $commande, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->getPayload()->getString('_token'))) {
            foreach ($commande->getCommandeProduits() as $produitCommande) {
                $produit = $produitCommande->getProduit();
                $quantiteCommandee = $produitCommande->getQuantite();
        
                if ($produit && $quantiteCommandee !== null) {
                    $nouveauStock = $produit->getQuantite() + $quantiteCommandee;
                    $produit->setQuantite($nouveauStock);
                    $entityManager->persist($produit);
                }
                $entityManager->remove($produitCommande);
            }

            
            $emailMagasin = (new Email())
            ->from('adanelylia@gmail.com')
            ->to('lyliaadn@gmail.com')  // Email du responsable du magasin
            ->subject('Annulation d une Commande Reçue')
            ->html($this->renderView('commandes/suppression_commande.html.twig', [
                'commande' => $commande,
            ]));

        $mailer->send($emailMagasin);

        $emailClient = (new Email())
        ->from('adanelylia@gmail.com')  // Adresse de l'expéditeur (ton adresse)
        ->to($commande->getMailClient())  // Email du client récupéré depuis la commande
        ->subject('Annulation de votre commande')
        ->html($this->renderView('commandes/suppression_commande_client.html.twig', [
            'commande' => $commande,
        ]));

        $mailer->send($emailClient);

        $this->addFlash('success', 'Commande supprimé avec succès.');
      
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/update-quantite/{id}', name: 'update_quantite', methods: ['POST'])]
    public function updateQuantite(Request $request, EntityManagerInterface $entityManager, int $id, Commandes $commande, MailerInterface $mailer): Response
    {

        $commandeId = $request->request->get('commande_id');
        $totalCommande = $request->request->get('total_commande');
        $quantites = $request->request->all();
        $quantites = $quantites['quantite'];
        $totalPrixCommande = 0;
        $commande = $entityManager->getRepository(Commandes::class)->find($commandeId);
        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée');
        }

        foreach ($commande->getCommandeProduits() as $produitCommande) {
            $produit = $produitCommande->getProduit();
            $produitId = $produitCommande->getProduit()->getId();
            if (isset($quantites[$produitId])) {
                $ancienneQuantite = $produitCommande->getQuantite();
                $nouvelleQuantite = (int) $quantites[$produitId];
                // Mettre à jour la quantité si elle a changé
                if ($produitCommande->getQuantite() !== $nouvelleQuantite) {
                    $deltaQuantite = $ancienneQuantite - $nouvelleQuantite;
                    // Mise à jour du stock
                    $stockActuel = $produit->getQuantite();
                    $nouveauStock = $stockActuel + $deltaQuantite;
                    $produit->setQuantite($nouveauStock);
                    $entityManager->persist($produit);

                    $produitCommande->setQuantite($nouvelleQuantite);
                }
                // Calculer le montant pour ce produit
                $montantProduit = $produitCommande->getProduit()->getPrix() * $nouvelleQuantite;
                $produitCommande->setMontant((string) $montantProduit);
                // Ajouter le montant au total de la commande
                $totalPrixCommande += $montantProduit;
                $commande->setMontantTotal((string)$totalPrixCommande); 
                $commande->setStatut('1'); 
            }
        }
        $entityManager->persist($produitCommande);
        $entityManager->flush();

        $emailClient = (new Email())
        ->from('adanelylia@gmail.com')  // Adresse de l'expéditeur (ton adresse)
        ->to($commande->getMailClient())  // Email du client récupéré depuis la commande
        ->subject('Preparation de votre commande')
        ->html($this->renderView('commandes/preparation_commande_client.html.twig', [
            'commande' => $commande
        ]));

        $mailer->send($emailClient);
        // Rediriger vers la page de la commande après mise à jour
        return $this->redirectToRoute('app_commandes_index');
    }


    #[Route('/commande_recupere/{id}', name: 'commande_recupere', methods: ['POST'])]
    public function recupereCommande(Request $request, EntityManagerInterface $entityManager, int $id, Commandes $commande, MailerInterface $mailer): Response
    {

        $commande->setStatut('2'); 

        $entityManager->persist($commande);
        $entityManager->flush();

      
        return $this->redirectToRoute('app_commandes_index');
    }

    #[Route('/commande_annule/{id}', name: 'commande_annule', methods: ['POST'])]
    public function annuleCommande(Request $request, EntityManagerInterface $entityManager, int $id, Commandes $commande, MailerInterface $mailer): Response
    {
        $emailClient = (new Email())
        ->from('adanelylia@gmail.com')  // Adresse de l'expéditeur (ton adresse)
        ->to($commande->getMailClient())  // Email du client récupéré depuis la commande
        ->subject('Annuation de votre commande')
        ->html($this->renderView('commandes/annulation_commande_client.html.twig', [
            'commande' => $commande
        ]));

        $mailer->send($emailClient);

        foreach ($commande->getCommandeProduits() as $produitCommande) {
            $produit = $produitCommande->getProduit();
            $quantiteCommandee = $produitCommande->getQuantite();
    
            if ($produit && $quantiteCommandee !== null) {
                $nouveauStock = $produit->getQuantite() + $quantiteCommandee;
                $produit->setQuantite($nouveauStock);
                $entityManager->persist($produit);
            }
            $entityManager->remove($produitCommande);
        }
        // Supprimer la commande elle-même
        $entityManager->remove($commande);
        $entityManager->flush();
  
        return $this->redirectToRoute('app_commandes_index');
    }
        

}
