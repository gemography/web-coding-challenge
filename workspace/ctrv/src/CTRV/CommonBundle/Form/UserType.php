<?php

namespace CTRV\CommonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userid',null,array('label'=>'utilisateur.editForm.userid','read_only' => true,'required'=>false))
            ->add('login',null,array('label'=>'utilisateur.editForm.login','read_only' => true,'required'=>false))
            ->add('salt',null,array('label'=>'utilisateur.editForm.salt','read_only' => true,'required'=>false))
            ->add('password',null,array('label'=>'utilisateur.editForm.password','read_only' => true,'required'=>false))
            ->add('firstName',null,array('label'=>'utilisateur.editForm.firstName','read_only' => true,'required'=>false))
            ->add('lastName',null,array('label'=>'utilisateur.editForm.lastName','read_only' => true,'required'=>false))
            ->add('email',null,array('label'=>'utilisateur.editForm.email','read_only' => true,'required'=>false))
            ->add('registrationDate','date',array('label'=>'utilisateur.editForm.registrationDate','read_only' => true,'required'=>false))
            ->add('latitude',null,array('label'=>'utilisateur.editForm.latitude','read_only' => true,'required'=>false))
            ->add('longitude',null,array('label'=>'utilisateur.editForm.longitude','read_only' => true,'required'=>false))
            ->add('isActive',null,array('label'=>'utilisateur.editForm.isActive','read_only' => true,'required'=>false))
            ->add('isBlocked',null,array('label'=>'utilisateur.editForm.isBlocked','read_only' => true,'required'=>false))
            ->add('state',null,array('label'=>'utilisateur.editForm.state','read_only' => true,'required'=>false))
            ->add('lastLoginDate','date',array('label'=>'utilisateur.editForm.lastLoginDate','read_only' => true,'required'=>false))
            ->add('numeroRue',null,array('label'=>'utilisateur.editForm.numeroRue','read_only' => true,'required'=>false))
            ->add('address',null,array('label'=>'utilisateur.editForm.address','read_only' => true,'required'=>false))
            ->add('language',null,array('label'=>'utilisateur.editForm.language','read_only' => true,'required'=>false))
            ->add('city',null,array('label'=>'utilisateur.editForm.city','read_only' => true,'required'=>false))
            ->add('role',null,array('label'=>'utilisateur.editForm.role'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CTRV\CommonBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'ctrv_commonbundle_usertype';
    }
}
