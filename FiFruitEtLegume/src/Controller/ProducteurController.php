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
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Producteur');
        $producteurs=$repository->findAll();

        return $this->render('Producteur/index.html.twig', [
            'controller_name' => 'EvenementController',
            'producteurs'=> $producteurs,
        ]);
    }

    /**
     * @Route("/detailproducteur/{id}", name="detailproducteur")
     */
    public function detailproducteur($id)
    {
        //acces aux services Doctrine, puis entityManager, puis Répository de l'object Producteur :
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Producteur');

        $producteurChoisi=$repository->find($id);
        $listeProduits=$producteurChoisi->getProduits();

        $listeLegumes= array();
        foreach ($listeProduits as $unProduit){
            if($unProduit->getType()=="legume"){
                $listeLegumes[] = $unProduit;
            }
        }

        $listeFruits= array();
        foreach ($listeProduits as $unProduit){
            if($unProduit->getType()=="fruit"){
                $listeFruits[] = $unProduit;
            }
        }

        $listeViandes= array();
        foreach ($listeProduits as $unProduit){
            if($unProduit->getType()=="viande"){
                $listeViandes[] = $unProduit;
            }
        }

        $listePoissons= array();
        foreach ($listeProduits as $unProduit){
            if($unProduit->getType()=="poisson"){
                $listePoissons[] = $unProduit;
            }
        }

        $listeFruitDeMer= array();
        foreach ($listeProduits as $unProduit){
            if($unProduit->getType()=="fruit de mer"){
                $listeFruitDeMer[] = $unProduit;
            }
        }

        $listeFromage= array();
        foreach ($listeProduits as $unProduit){
            if($unProduit->getType()=="fromage"){
                $listeFromage[] = $unProduit;
            }
        }

        return $this->render('Producteur/detailProducteur.html.twig', [
            'controller_name' => 'DetailProducteurController',
            'producteur' => $producteurChoisi,
            'cesProduits' => $listeProduits,
            'cesLegumes' => $listeLegumes,
            'cesFruits' => $listeFruits,
            'cesViandes' => $listeViandes,
            'cesPoissons' => $listePoissons,
            'cesFruitDeMer' => $listeFruitDeMer,
            'cesFromages' => $listeFromage,
        ]);
    }

    /**
     * @Route("/carteproducteur/{id}", name="carteproducteur")
     */
    public function carteproducteur($id)
    {
        //acces aux services Doctrine, puis entityManager, puis Répository de l'object Producteur :
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Producteur');

        $producteurChoisi=$repository->find($id);

        return $this->render('Producteur/carteProducteur.html.twig', [
            'controller_name' => 'carteProducteurController',
            'producteur' => $producteurChoisi,
        ]);
    }



}