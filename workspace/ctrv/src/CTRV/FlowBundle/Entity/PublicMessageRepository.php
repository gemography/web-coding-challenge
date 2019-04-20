<?php

namespace CTRV\FlowBundle\Entity;

use CTRV\CommonBundle\DependencyInjection\Constants;

use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\Mapping as ORM;


class PublicMessageRepository extends EntityRepository
{
/**
 * Retourne la liste des Messages Publics de la ville courante
 */    
	public function getPublicMessage ($city, $first, $last) {
		$qb = $this->createQueryBuilder("pm")
		->where("pm.sender is not null")
		->andWhere("pm.city=?1")
		->orderBy('pm.date', 'DESC')
		->setParameter(1, $city)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	
	/**
	 * Retourne le nombre de Messages Publics de la ville courante
	 */
	public function getPublicMessageNumber ($city) {
		$qb = $this->createQueryBuilder("pm")
		->select("count(pm)")
		->where("pm.sender is not null")
		->andWhere("pm.city=?1")
		->orderBy('pm.date', 'DESC')
		->setParameter(1, $city)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * Retourne la liste de tous les messages publics signalés
	 */
	public function getMessagePublicAbuse($city, $first, $last) {
		$qb= $this->createQueryBuilder("pm")
		->select("a.entityType, pm.content, pm.date, pm.id")
		->from('CTRV\CommonBundle\Entity\Abuse','a')
		->where("a.entityId=pm.id")
		->orderBy("a.id","desc")
		->setFirstResult($first)
		->setMaxResults($last)
		->groupBy('a.entityId')
		;
		
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * Retourne le nombre de messages publics signalés
	 */
	public function getMessagePublicAbuseNumber($city) {
		$qb= $this->createQueryBuilder("pm")
		->select("count(DISTINCT pm.id)")
		->from('CTRV\CommonBundle\Entity\Abuse','a')
		->where("a.entityId=pm.id")
		->orderBy("a.id","desc")
		->groupBy('a.entityId')
		;
		
		return $qb->getQuery()->getSingleScalarResult();
	}
}