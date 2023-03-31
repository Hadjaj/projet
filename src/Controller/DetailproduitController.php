<?php

namespace App\Controller;

use App\Entity\Produit;

use App\Entity\Commentaire;

use App\Form\CommentaireType;

use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class DetailproduitController extends AbstractController
{
    /**
     * @Route("/detailproduit/{id}", name= "app_detailproduit"))
     */
    public function index(Produit $produit, CommentaireRepository $commentaireRepository, Request $request): Response
    {
        $commentaire = new Commentaire();

        $form = $this->createForm(CommentaireType::class,  $commentaire);
        $form->handleRequest($request);

        $commentaireparproduit = $commentaireRepository->findBy(
            [

                'produits' => $produit
            ]
        );

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setUsers($this->getUser());

            $commentaire->setProduits($produit);

            $commentaireRepository->save($commentaire, true);
            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('detailproduit/index.html.twig', [
            'produit' => $produit,
            'les_commentaires' => $commentaireparproduit,
            'form' => $form
        ]);
    }
}
