<?php

namespace CTRV\FlowBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\Mapping as ORM;


class GroupUserRepository extends EntityRepository
{
/**
 * retourne le nombre total de groupes
 */    
	public function getGroupNumber() {
		$qb = $this->createQueryBuilder("g")
		->select("count(g)")
		->where("g.admin is not null")
		->orderBy('g.addedDate', 'DESC')
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * retourne la liste de tous les groupes
	 */
	public function getGroup () {
		$qb = $this->createQueryBuilder("g")
		->select('g')
		->where("g.admin is not null")
		->orderBy('g.addedDate', 'DESC')
		;
		return $qb->getQuery()->getResult();
	}
	
/**
 * retourne la liste des groupes de la ville courante
 */	
	public function getGroupByCity ($city) {
		$qb = $this->createQueryBuilder("g")
		->select('g')
		->from('CTRV\CommonBundle\Entity\User','gu')
		->where("g.admin=gu.userid")
		->andWhere("gu.city=?1")
		->orderBy('g.addedDate', 'DESC')
		->setParameter(1,$city)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * retourne le nombre de groupes de la ville courante
	 */
	public function getGroupByCityNumber ($city) {
		$qb = $this->createQueryBuilder("g")
		->select("count(g)")
		->from('CTRV\CommonBundle\Entity\User','gu')
		->where("g.admin=gu.userid")
		->andWhere("gu.city=?1")
		->orderBy('g.addedDate', 'DESC')
		->setParameter(1,$city)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
/**
 * retourne la liste des membres du groupe spécifié
 */	
	public function getGroupMember ($id) {
		$qb = $this->createQueryBuilder("g")
		->select('g')
		->from('CTRV\FlowBundle\Entity\GroupMember','gm')
		->where("g.id=?1")
		->andWhere("g.id=gm.groupUser")
		->orderBy('g.addedDate', 'DESC')
		->setParameter(1,$id)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * retourne le nombre de membres du groupe spécifié
	 */
	public function getGroupMemberNumber ($id) {
		$qb = $this->createQueryBuilder("g")
		->select("count(g)")
		->from('CTRV\FlowBundle\Entity\GroupMember','gm')
		->where("g.id=?1")
		->andWhere("g.id=gm.groupUser")
		->orderBy('g.addedDate', 'DESC')
		->setParameter(1,$id)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
}