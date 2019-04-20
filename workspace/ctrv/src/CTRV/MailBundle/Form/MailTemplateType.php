<?php

namespace CTRV\MailBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailTemplateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('mailType',null,array('label'=>'mail.form.type'))
            ->add('subject',null,array('label'=>'mail.form.subject'))
            ->add('content',null,array('label'=>'mail.form.content'))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CTRV\MailBundle\Entity\MailTemplate'
        ));
    }

    public function getName()
    {
        return 'ctrv_mailbundle_mailtemplatetype';
    }
}
