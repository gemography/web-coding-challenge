<?php

namespace CTRV\CommonBundle\Form;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	
        $builder
        ->add('firstName',null,array('label'=>'registration.form.firstName'))
        ->add('lastName',null,array('label'=>'registration.form.lastName'))
        ->add('login',null,array('label'=>'registration.form.login'))
        ->add('email', 'email',array('label'=>'registration.form.email'))
        ->add('password', 'repeated', array (
				        'first_name' => 'password',
					    'second_name' => 'confirm',
				        'type' => 'password',
        				'first_options' => array('label' => 'registration.form.password'),
        				'second_options' => array('label' => 'registration.form.confirmation')
        				))
        		->add('city', 'entity', array (
        						'class' => 'CTRVCommonBundle:City',
        						'query_builder' => function(EntityRepository $er) {
        						return $er->createQueryBuilder('u')
        						->orderBy('u.name', 'ASC');
        				},'label'=>'registration.form.city'
        				)
        		);
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
