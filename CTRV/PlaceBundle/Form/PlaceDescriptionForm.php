<?php

namespace CTRV\PlaceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PlaceDescriptionForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('activity','textarea',array('label'=>'place.ajouterForm.activity','read_only' => true,'required'=>false))
        ->add('latitude','text',array('label'=>'place.ajouterForm.latitude','required'=>false,'read_only' => true))
        ->add('longitude','text',array('label'=>'place.ajouterForm.longitude','required'=>false,'read_only' => true))
        ->add('isApproximateAddress','checkbox',array('label'=>'place.ajouterForm.isApproxAdress','read_only' => true,'required'=>false))
        ->add('description','textarea',array('label'=>'place.ajouterForm.description','required'=>false))
        ->add('title','text',array('label'=>'place.ajouterForm.TitlePlace','read_only' => true,'required'=>false))
        ->add('siteUrl','text',array('label'=>'place.ajouterForm.siteUrl','read_only' => true,'required'=>false))
        ->add('town','text',array('label'=>'place.ajouterForm.town','read_only' => true,'required'=>false))
        ->add('street','textarea',array('label'=>'place.ajouterForm.street','read_only' => true,'required'=>false))
        ->add('mark','text',array('label'=>'place.ajouterForm.mark','read_only' => true,'required'=>false))
        ->add('tel','text',array('label'=>'place.ajouterForm.tel','read_only' => true,'required'=>false))
        ->add('numberMark','text',array('label'=>'place.ajouterForm.numberMark','read_only' => true,'required'=>false))
        ->add('addedDate','date',array('label'=>'place.ajouterForm.date','read_only' => true,'required'=>false))
        ->add('placeType', 'entity', array ('read_only' => true,
        		'class' => 'CTRVPlaceBundle:PlaceType',
        		'query_builder' => function(EntityRepository $er) {
        		return $er->createQueryBuilder('u')
        		->orderBy('u.label', 'ASC');
        },
        'label'=>'place.moderate.form.placeType'
        ))
        //->add('auteur')
        //->add('owner')
        ->add('city', 'entity', array ('read_only' => true,
        		'class' => 'CTRVCommonBundle:City',
        		'query_builder' => function(EntityRepository $er) {
        		return $er->createQueryBuilder('c')
        		->orderBy('c.name', 'ASC');
        },
        'label'=>'place.ajouterForm.city'
        ))
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
        return 'ctrv_placebundle_placeLatLongform';
    }
}
