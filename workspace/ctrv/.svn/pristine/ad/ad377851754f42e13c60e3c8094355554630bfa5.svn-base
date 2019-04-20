<?php

namespace CTRV\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EventTypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label','text',array('label'=>'event.ajouterForm.libelle'))
            ->add('code','text',array('label'=>'event.ajouterForm.code'))
            ->add('language','choice',array('label'=>'event.ajouterForm.langue','choices'=>array(
                  'FRENCH'   => 'event.ajouterForm.fr',
                  'ENGLISH' => 'event.ajouterForm.en',
                  'SPANISH'   => 'event.ajouterForm.es',
    ),
            		))
            ->add('img_url','file',array('label'=>'event.ajouterForm.select_file', 'required'=>false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CTRV\EventBundle\Entity\EventType'
        ));
    }

    public function getName()
    {
        return 'ctrv_eventbundle_eventtypetype';
    }
}
