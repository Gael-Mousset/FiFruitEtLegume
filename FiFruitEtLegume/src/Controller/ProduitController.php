<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index()
    {
        return $this->render('Produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * @Route("/detailproduit", name="detailproduit")
     */
    public function detailproduit()
    {
        return $this->render('Produit/detailProduit.html.twig', [
            'controller_name' => 'DetailProduitController',
        ]);
    }

}