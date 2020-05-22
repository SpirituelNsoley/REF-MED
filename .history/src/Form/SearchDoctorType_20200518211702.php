<?php

namespace App\Form;

use App\Entity\Profession;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchDoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('profession', EntityType::class,[
                'class'=> Profession::class,
                'attr' =>[
                    'class' =>'form-control',
                    ],
                 'label'=> "Quel genre de médecin",
                
            ])
            ->add('distance')
            ->add('lat')
            ->add('lon')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
