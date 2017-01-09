<?php

namespace Gedi\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', EmailType::class);
        $builder->add('password', RepeatedType::class, array(
            'type' => PasswordType::class,
            'first_options' => array('label' => 'Mot de passe'),
            'second_options' => array('label' => 'Confirmation de mot de passe'),
        ));
        $builder->add('nom', TextType::class);
        $builder->add('prenom', TextType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gedi\BaseBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gedi_basebundle_utilisateur';
    }

    public function getUsername()
    {
        return 'username';
    }

    public function getPassword()
    {
        return 'password';
    }

    public function getNom()
    {
        return 'nom';
    }

    public function getPrenom()
    {
        return 'prenom';
    }
}
