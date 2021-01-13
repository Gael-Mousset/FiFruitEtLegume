<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
    public function add(Request $request)
    {
        $consommateur = new Consommateur();
        $form = $this->createForm(InscriptionFormType::class, $consommateur);

        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            if($form->isValid())
            {
                $em = $this->getDoctrine()->getManager(); // On récupère l'entity manager
                $em->persist($consommateur); // On confie notre entité à l'entity manager (on persist l'entité)
                $em->flush(); // On execute la requete

                return $this->render('Connexion/connexion.html.twig', [
                    "name" => "Inscription",
                    'form' => $form->createView(),
                    'inscription' => "L'inscription est validé."
                ]);
            }
            else
            {
                return $this->render('Connexion/connexion.html.twig', [
                    "name" => "Inscription" ,
                    'form' => $form->createView(),
                    'inscription' => "L'inscription est refusé."
                ]);
            }
        }
        else
        {
            return $this->render('Connexion/connexion.html.twig', [
                "name" => "Inscription" ,
                'form' => $form->createView(),
                'inscription' => "Voulez-vous vous inscrire?"
            ]);
        }
    }
}