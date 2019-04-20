<?php

namespace CTRV\CommonBundle\Service;

use CTRV\CommonBundle\Entity\User;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserService {
	
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
	 * Retourne la liste des utilisateurs de la ville courante
	 * @param unknown_type $currentCity
	 */
	public function getUsersByCity($currentCity) {
		return $this->em->getRepository('CTRVCommonBundle:User')
		->getUsersByCity($this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));
	}
	
	/**
	 * retourne le nombre d'utilisateurs de la ville courante
	 * @param unknown_type $currentCity
	 * @return unknown
	 */
	public function getAllUsersNumberByCity ($currentCity) {
		$userNumber = $this->em->getRepository('CTRVCommonBundle:User')
		->getAllUsersNumberByCity($this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));
		return $userNumber;
	}
	
	/**
	 * retourne le nombre d'utlisateur connectés
	 */
	public function getUsersConnectedNumber() {
		$userConnectedNumber = $this->em->getRepository('CTRVCommonBundle:ConnectedUsers')->getUsersConnectedNumber();
		return $userConnectedNumber;
	}
	
	/**
	 * retourne le nombre d'utilisateurs connectés de la ville courante
	 * @param unknown_type $currentCity
	 */
public function getUsersConnectedNumberByCity($currentCity) {
		$entities = $this->em->getRepository('CTRVCommonBundle:ConnectedUsers')
		->getUsersConnectedNumberByCity($this->em->getRepository('CTRVCommonBundle:City')->find($currentCity->getId()));
		return $entities;
	}
	
	/**
	 * retourne le nomber total d'utilisateurs
	 * @return unknown
	 */
	public function getAllUsersNumber() {
		$userNumber = $this->em->getRepository('CTRVCommonBundle:User')->getAllUsersNumber();
		return $userNumber;
	}
	
}
