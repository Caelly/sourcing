<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label'=> 'Votre email',
                'attr' => [
                    'placeholder'=> 'Merci de saisir votre email',
                ]
            ])
            ->add('password', PasswordType::class, [
                'label'=> 'Votre mot de passe',
                'attr' => [
                    'placeholder'=> 'Merci de saisir votre mot de passe',
                ]
            ])
// TODO : add Repeated Field
            ->add('submit', SubmitType::class,[
                'label'=> "S'inscrire",
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
