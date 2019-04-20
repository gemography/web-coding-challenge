<?php

namespace CTRV\CommonBundle\Form;

use CTRV\CommonBundle\DependencyInjection\Constants;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class UserRechercheType extends AbstractType{

public function buildForm(FormBuilderInterface $builder, array $options){

	$builder->add('motcle','text', array('label' => 'utilisateur.rechercheForm.rechercher','required'=>false))
	
	->add('Etat','choice',array('label'=>'utilisateur.rechercheForm.etat',
								'choices'=>array( Constants::STATE_USER_FILTER_ALL   => 'utilisateur.rechercheForm.all',
        										Constants::STATE_USER_FILTER_BLOCKED => 'utilisateur.rechercheForm.block',
        										Constants::STATE_USER_FILTER_DISABED  => 'utilisateur.rechercheForm.desactive'
    											),
            					)
			);
}
public function getName(){

	return 'userrecherche';
}

}
