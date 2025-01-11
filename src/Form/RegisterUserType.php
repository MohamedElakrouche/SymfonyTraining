<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\Length;

use Symfony\Component\Validator\Constraints\Email;

class RegisterUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Votre adresse email :',
                'label_attr' => ['class' => 'mt-3'],
                'attr' => [
                    'placeholder' => 'Entrez votre adresse email',
                    'class' => 'mt-3 text-center'
                ]
            ])
       
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => [ new Length(['min' => 6, 'max' => 30])],
                'first_options'  => ['label' => 'Entrez votre mot de passe', 'hash_property_path' => 'password', 'label_attr' => ['class' => 'form-label mt-3'],],
                'second_options' => ['label' => 'Entrez votre mot de passe à nouveau',  'label_attr' => ['class' => 'form-label mt-3'],],
                
                'mapped' => false,
            ])
                
            
            ->add('firstname',TextType::class, [
                'constraints' => [ new Length(['min' => 2, 'max' => 30])],
                'label' => 'Votre prénom :',
                'label_attr' => ['class' => 'mt-3'],
                'attr' => [
                    'placeholder' => 'Entrez votre prénom',
                    'class' => 'form-label mt-3 text-center',
                ]
            ])
            ->add('lastname', TextType::class, [
                'constraints' => [ new Length(['min' => 2, 'max' => 30])],
                'label' => 'Votre nom :',
                'label_attr' => ['class' => 'mt-3'],
                'attr' => [
                    'placeholder' => 'Entrez votre nom',
                    'class' => 'mt-3 text-center'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'S\'inscrire',
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
