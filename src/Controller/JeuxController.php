<?php

namespace App\Controller;

use App\Form\JeuxType;
use App\Service\JeuxService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JeuxController extends AbstractController
{
    /**
     * @Route("/jeux", name="app_jeux")
     */
    public function index(Request $request, JeuxService $jeuxService): Response
    {
        $form = $this->createForm(JeuxType::class);

        // on prend l'objet form qui va lire la request
        $form->handleRequest($request);

        // test si l'envoie en post et est valide est bien envoyé
        if ($form->isSubmitted() && $form->isValid()) {

            // creer une variable data qui est un tableau clé valeur
            // contenant les données envoyé en POST
            $data = $form->getData();

            $data['alea'] = rand(1, 100);

            // une variable aléatoire va être généré  et 
            // stocké dans le tableau data sur la clé alea
            $data['reponse'] = $jeuxService->jeu($data['nombre'], $data['alea']);

            // on va tester elle est égal à ce qui est inséré




            return $this->render('jeux/traitement.html.twig', [
                'mes_donnes' => $data,
            ]);
        }
        return $this->renderForm('jeux/index.html.twig', [
            'form' => $form,
        ]);
    }
}
