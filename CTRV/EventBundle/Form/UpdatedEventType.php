<?php

namespace CTRV\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UpdatedEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('latitude')
            ->add('longitude')
            ->add('duration')
            ->add('addedDate')
            ->add('description')
            ->add('title')
            ->add('street')
            ->add('startDate')
            ->add('endDate')
            ->add('startTime')
            ->add('endTime')
            ->add('event')
            ->add('auteur')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CTRV\EventBundle\Entity\UpdatedEvent'
        ));
    }

    public function getName()
    {
        return 'ctrv_eventbundle_updatedeventtype';
    }
}
