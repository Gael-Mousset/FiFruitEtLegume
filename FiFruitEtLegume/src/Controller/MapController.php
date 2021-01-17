<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapController extends AbstractController
{
    /**
     * @Route("/carteproducteur{id}", name="carteproducteur")
     */
    public function index($id): Response
    {
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Producteur');
        $producteurChoisi=$repository->find($id);



        return $this->render('Producteur/carteProducteur.html.twig', [
            'controller_name' => 'MapController',
            'producteur' => $producteurChoisi

        ]);
    }
}
