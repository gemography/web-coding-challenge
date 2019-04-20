<?php

namespace CTRV\MailBundle\Service;

use CTRV\MailBundle\Entity\MailType;

//use CTRV\CommonBundle\DependencyInjection\Constants;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MailService {
	
	protected $mailer;
	protected $doctrine;
	protected $em;
	protected $service_container;
	protected $templating;
	
	
	public function __construct(\Swift_Mailer $mailer,RegistryInterface $doctrine, ContainerInterface $service_container, TwigEngine $templating,TranslatorInterface $translator) {
		
		$this->mailer = $mailer;
		$this->doctrine = $doctrine;
		$this->em = $doctrine->getEntityManager();
		$this->service_container = $service_container;
		$this->templating = $templating;
		$this->translator = $translator;
	}
	/**
	 * Retourne la liste des types de mails
	 * @return unknown
	 */
	public function getTypeMails() {
		$entities = $this->em->getRepository('CTRVMailBundle:MailType')->getTypeMails();
		return $entities;
	
	}
	
}
