<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\Mapping as ORM;

class CityRepository extends EntityRepository
{
	
	/**
	 * Retourne la liste de toutes les villes
	 */
	public function getAllCities($first, $last) {
	$qb = $this->createQueryBuilder("c")
    ->orderBy('c.name','ASC')
    ->setFirstResult($first)
    ->setMaxResults($last)
	;
		return $qb->getQuery()->getResult();
	}
	/**
	 * Retourne le nombre total de Villes
	 */
	public function getAllCitiesNumber () {
		$qb = $this->createQueryBuilder("c")
		->select('count(c)')
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
}