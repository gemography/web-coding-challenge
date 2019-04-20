<?php

namespace CTRV\PlaceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('activity')
            ->add('latitude')
            ->add('longitude')
            ->add('isApproximateAddress')
            ->add('description')
            ->add('title')
            ->add('siteUrl')
            ->add('town')
            ->add('street')
            ->add('mark')
            ->add('numberMark')
            ->add('placeType')
        ;
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CTRV\PlaceBundle\Entity\Place'
        ));
    }

    public function getName()
    {
        return 'ctrv_placebundle_placetype';
    }
}
