<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\InscriptionFormType;
use App\Entity\Consommateur;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('Connexion/connexion.html.twig', [
            "name" => "Inscription"
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function add()
    {
        $consommateur = new Consommateur();
        $form = $this->createForm(InscriptionFormType::class, $consommateur);

        return $this->render('Connexion/connexion.html.twig', [
            "name" => "Inscription" ,
            'form' => $form->createView()
        ]);
    }
}