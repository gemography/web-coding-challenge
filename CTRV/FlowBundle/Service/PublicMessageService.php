<?php

namespace CTRV\FlowBundle\Service;

use CTRV\FlowBundle\Entity\PublicMessage;

use CTRV\CommonBundle\Entity\Abuse;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PublicMessageService {
	
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
 * retoune la liste des messages publics de la ville courante
 */	
    public function getPublicMessage($currentCity) {
		$entities = $this->em->getRepository('CTRVFlowBundle:PublicMessage')
		->getPublicMessage($this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));      
		 return $entities;
	}
	/**
	 * Retourne la liste des types de mails
	 * @return unknown
	 */
	public function getTypeMails() {
		$entities = $this->em->getRepository('CTRVMailBundle:MailType')->getTypeMails();
		return $entities;
	
	}
	/**
	 * retourne la liste des messages publics signalés de la ville courante
	 * @return unknown
	 */
	public function getMessagePublicAbuse($currentCity) {
		$entities = $this->em->getRepository('CTRVFlowBundle:PublicMessage')
		->getMessagePublicAbuse($this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));
		return $entities;
	}
}
