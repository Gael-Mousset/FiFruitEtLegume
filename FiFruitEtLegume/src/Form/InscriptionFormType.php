<?php

namespace App\Form;

use App\Entity\Consommateur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('required' => true))
            ->add('prenom', TextType::class, array('required' => true))
            ->add('mdp', PasswordType::class, array('required' => true))
            ->add('mail', TextType::class, array('required' => true))
            ->add('adresse', TextType::class, array('required' => true))
            ->add('telephone', TextType::class, array('required' => false))
            ->add('photo', TextType::class, array('required' => false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Consommateur::class,
        ]);
    }
}
