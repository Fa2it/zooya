<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;

class MyUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('dateOfBirth', DateType::class,[
        'format' => 'dd-MMM-yyyy',
        'years' => $this->getYearOfBirthOptions()
        ])
        ;
    }

    private function getYearOfBirthOptions(){
        $year = date("Y");
        return range($year-18, $year-99);
    }

    private function germanMonths(){
        return [ "Jan",
                 "Feb",
                 "Mär",
                // "April","Mai", "Juni", "Juli", "August", "September", "Oktober","November","Dezember"
              ];
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
