<?php

namespace CTRV\CommonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ChooseCityType extends AbstractType
{
    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('choose_city', 'entity', array(
	        		'class' => 'CTRVCommonBundle:City',
	        		'query_builder' => function(EntityRepository $er) {
	        		return $er->createQueryBuilder('u')
	        		->orderBy('u.name', 'ASC');
	        		},
	        		'label'=>'common.chooseCity'
	     	))
        ;
    }

    public function getName()
    {
        return 'choose_city_type';
    }
}
