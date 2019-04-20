<?php

namespace CTRV\MailBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class SendMailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('mailType',null,array('label'=>'mail.form.type'))
            ->add('subject',null,array('label'=>'mail.form.subject'))
            ->add('content',null,array('label'=>'mail.form.content'))
            ->add('destChoice','checkbox',array('label'=>'mail.sendMailform.destChoice1'))
            ->add('destField','textarea',array ('label'=>'mail.sendMailform.destPersonalised'))
        ;
    }

    public function getName()
    {
        return 'ctrv_mailbundle_sendMailtemplatetype';
    }
}
