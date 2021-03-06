<?php

namespace AE\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text', array('label' => 'Prénom'))
            ->add('adresse', 'textarea')
            ->add('code_postal', 'integer')
            ->add('telephone', 'number', array('label' => 'Téléphone'))
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'ae_user_registration';
    }

}