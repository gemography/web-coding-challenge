<?php

namespace CTRV\CommonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array('label' => 'city.form.name'))
            ->add('latitude','text', array('label' => 'city.form.latitude'))
            ->add('longitude','text', array('label' => 'city.form.longitude'))
            ->add('latitudeInf','text', array('label' => 'city.form.latitudeInf'))
            ->add('latitudeSup','text', array('label' => 'city.form.latitudeSup'))
            ->add('longitudeInf','text', array('label' => 'city.form.longitudeInf'))
            ->add('longitudeSup','text', array('label' => 'city.form.longitudeSup'))
            ->add('defaultAddress','text', array('label' => 'city.form.defaultAddress'))
            ->add('defaultZipcode','text', array('label' => 'city.form.defaultZipcode'))
            ->add('defaultAddressLongitude','text', array('label' => 'city.form.defaultAddressLongitude'))
            ->add('defaultAddressLatitude','text', array('label' => 'city.form.defaultAddressLatitude'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CTRV\CommonBundle\Entity\City'
        ));
    }

    public function getName()
    {
        return 'ctrv_commonbundle_citytype';
    }
}
