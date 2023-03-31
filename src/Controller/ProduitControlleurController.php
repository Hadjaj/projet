<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitControlleurController extends AbstractController
{
    /**
     * @Route("/produit/controlleur", name="app_produit_controlleur")
     */
    public function index(): Response
    {
        return $this->render('produit_controlleur/index.html.twig', [
            'controller_name' => 'ProduitControlleurController',
        ]);
    }
}
