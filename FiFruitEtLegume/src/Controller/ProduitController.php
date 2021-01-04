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
        $produitsLegume=$repository->findBy(array('type'=>'legume'));
        $produitsFruit=$repository->findBy(array('type'=>'fruit'));
        $produitsPoisson=$repository->findBy(array('type'=>'poisson'));
        $produitsFromage=$repository->findBy(array('type'=>'fromage'));
        $produitsViande=$repository->findBy(array('type'=>'viande'));
        $produitsMer=$repository->findBy(array('type'=>'fruit de mer'));

        //$producteurAssocie=$produitsLegume.getProducteur();
        //$adresse=$producteurAssocie.getAdresse();

        return $this->render('Produit/index.html.twig', [
            'controller_name' => 'ProduitController',
            'legumes' => $produitsLegume,
            'fruits' => $produitsFruit,
            'poisson' => $produitsPoisson,
            'fromage' => $produitsFromage,
            'viande' => $produitsViande,
            'fruitDeMer' => $produitsMer,
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