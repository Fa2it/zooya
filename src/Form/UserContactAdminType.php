<?php

namespace App\Form;

use App\Entity\ContactAdmin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserContactAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('topic', ChoiceType::class, [
                'choices'=>[
                    'Web design'=> 1,'User Theft'=> 2, 'others'
                    ],

                ])
            ->add('message',TextareaType::class,[
                'attr' => ['rows' => '10'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactAdmin::class,
        ]);
    }
}
