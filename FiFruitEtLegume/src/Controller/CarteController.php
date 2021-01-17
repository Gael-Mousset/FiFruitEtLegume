<?php

namespace App\Controller;

use App\Entity\Producteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteController extends AbstractController
{
    /**
     * @Route("/carte", name="carte")
     */
    public function index(): Response
    {

        $repositoryProducteur = $this->getDoctrine()->getManager()->getRepository("App\Entity\Producteur");
        $producteurs = $repositoryProducteur->findAll();
        return $this->render('Carte/index.html.twig', [
            'controller_name' => 'CarteController',
            //'data' => $fake_data,
            'data' =>$producteurs

        ]);
    }
}
