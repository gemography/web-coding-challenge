<?php

namespace CTRV\EventBundle\Service;

use CTRV\EventBundle\Entity\Event;

use CTRV\CommonBundle\Entity\Abuse;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\DependencyInjection\ContainerInterface;

class EventService {
	
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
	 * retourne la lsite des événements de la ville courante
	 */
    public function getEvent($currentCity) {
		$entities = $this->em->getRepository('CTRVEventBundle:Event')
		->getEvent($this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));      
		 return $entities;
	}
	/**
	 * retourne la lsite des agendas de la ville courante
	 */
	public function getAgenda($currentCity) {
		$entities = $this->em->getRepository('CTRVEventBundle:Event')
		->getAgenda($this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));
		return $entities;
	}
	/**
	 * retourne la liste des types d'évenements
	 */
	public function getTypeEvents() {
		$entities = $this->em->getRepository('CTRVEventBundle:EventType')->getTypeEvents();
		return $entities;
	
	}
	}
