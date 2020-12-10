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
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Produit');
        $produits=$repository->findAll();

        return $this->render('Produit/index.html.twig', [
            'controller_name' => 'ProduitController',
            'produits' => $produits,
        ]);
    }

    /**
     * @Route("/detailProduit/{id}", name="detailproduit")
     */
    public function detailproduit($id)
    {
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Produit');
        $produitChoisi=$repository->find($id);

        $producteurAssocie = $produitChoisi->getProducteur();

        return $this->render('Produit/detailProduit.html.twig', [
            'produit' => $produitChoisi,
            'producteur' => $producteurAssocie
        ]);
    }

}