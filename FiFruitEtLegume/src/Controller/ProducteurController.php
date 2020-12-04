<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProducteurController extends AbstractController
{
    /**
     * @Route("/producteur", name="producteur")
     */
    public function index()
    {
        return $this->render('Producteur/index.html.twig', [
            'controller_name' => 'ProducteurController',
        ]);
    }

    /**
     * @Route("/detailproducteur", name="detailproducteur")
     */
    public function detailproducteur()
    {
        return $this->render('Producteur/detailProducteur.html.twig', [
            'controller_name' => 'DetailProducteurController',
        ]);
    }

}