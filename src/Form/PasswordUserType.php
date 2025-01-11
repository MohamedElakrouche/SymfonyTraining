<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PasswordUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('actualPassword', PasswordType::class, [
            'label' => 'Entrez votre mot de passe actuel',
            'label_attr' => ['class' => 'mt-3'],
            'mapped' => false,
            
        ])
            
        ->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'constraints' => [ new Length(['min' => 4, 'max' => 20])],
            'first_options'  => ['label' => 'Entrez votre mot de passe', 'hash_property_path' => 'password', 'label_attr' => ['class' => 'form-label mt-3'],],
            'second_options' => ['label' => 'Entrez votre mot de passe à nouveau',  'label_attr' => ['class' => 'form-label mt-3'],],
            
            'mapped' => false,
        ])

        ->add('submit', SubmitType::class, [
            'label' => 'Modifié mon mot de passe',
            'attr' => [
                'class' => 'btn btn-success mt-3'
            ]
        ])

        
            
      ;  
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
