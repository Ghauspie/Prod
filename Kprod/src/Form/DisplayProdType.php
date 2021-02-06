<?php

namespace App\Form;

use App\Entity\DisplayProd;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DisplayProdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'label'=> 'indiqué le nom de la ligne de prod :'
            ])
            ->add('url', null, [
                'label'=> 'indiqué l\'adresse du site web de la ligne de prod :'
            ])
            // ->add('createdAt')
            // ->add('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DisplayProd::class,
        ]);
    }
}
