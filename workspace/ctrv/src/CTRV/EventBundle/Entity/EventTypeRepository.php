<?php

namespace CTRV\EventBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\Mapping as ORM;


class EventTypeRepository extends EntityRepository
{
	/**
	 * retourne la liste des types d'évenements
	 */ 
	public function getTypeEvents($first, $last){
		$qb= $this->createQueryBuilder("p")
		->orderBy('p.code','ASC')
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * retourne le nombre de types d'évenements
	 */
	public function getTypeEventsNumber(){
		$qb= $this->createQueryBuilder("p")
		->select("count(p)")
		->orderBy('p.code','ASC')
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
    
}