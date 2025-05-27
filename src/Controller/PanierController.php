<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProduitsRepository;

class PanierController extends AbstractController
{
    #[Route('/panier/add/{id}', name: 'panier_add')]
    public function add($id, SessionInterface $session)
    {
        
        // récupèrer dans le panier la session 
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        } else
        $panier[$id] = 1;

        $session->set('panier', $panier);

       //dd($session->get('panier'));
       return $this->redirectToRoute('app_produit_index');
    }

    #[Route('/remove/{id}', name: 'panier_remove')]
    public function remove($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
    
        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--; // décrémente directement l'entier
            } else {
                unset($panier[$id]);
            }
        }
    
        $session->set('panier', $panier);
    
        return $this->redirectToRoute('app_panier');
    }
    
    
    #[Route('/panier/delete/{id}', name: 'panier_delete')]
    public function delete($id, SessionInterface $session)
    {
        
        // récupèrer dans le panier la session 
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute("app_panier");

    }
    
    #[Route('/panier', name: 'app_panier')]
    public function index(SessionInterface $session, ProduitsRepository $produitsRepository ): Response
    {
          $panier = $session->get('panier', []); 
          
          $data = []; 

          foreach ($panier as $id => $quantity) {
            $data[] = [
                'produit' => $produitsRepository->find($id),
                'quantity' => $quantity,
            ];
        }

        $total = 0;

        foreach($data as $item){
            $totalItem = $item['produit']->getPrix() * $item['quantity'];
            $total += $totalItem;
        }

        $session->set('panierData', $data);

        return $this->render('panier/index.html.twig', [
            'items' => $data,
            'total' => $total,
            'controller_name' => 'PanierController',
        ]);
    }
}
