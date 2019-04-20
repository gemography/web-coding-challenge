<?php

namespace CTRV\CommonBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SessionService {

	protected $doctrine;
	protected $em;
	protected $session;
	protected $translator;
	protected $service_container;

	public function __construct(Session $session, RegistryInterface $doctrine,
			TranslatorInterface $translator,ContainerInterface $service_container) {

		$this->session = $session;
		$this->doctrine = $doctrine;
		$this->service_container = $service_container;
		$this->em = $doctrine->getEntityManager();
		$this->translator = $translator;
	}

	public function getCity() {
		return $this->session->get('city');
	}

	public function setCity($city) {
		$this->session->remove('city');
		$this->session->set('city', $city);
	}

}
