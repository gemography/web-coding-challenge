<?php

namespace CTRV\CommonBundle\Entity;

use CTRV\CommonBundle\DependencyInjection\Constants;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;


class CommentRepository extends EntityRepository
{
	
	/**
	 * retourne la liste de commnetaires d'agendas de la ville courante
	 */
	public function getAgendaComment ($city, $first, $last) {
		
		$qb = $this->createQueryBuilder("p")
		->select('p as comment')
		->from('CTRV\EventBundle\Entity\Event','a')
		->addSelect('a.title')
		->where("p.idEntity=a.id")
		->andwhere("p.typeEntity=?1")
		->andWhere("a.city=?2")
		->andWhere('a.isPrivate=?3')
		->andWhere('a.isRealtime=?4')
		->orderBy('p.date', 'DESC')
		->setParameter(1, Constants::TYPE_ENTIY_AGENDA)
		->setParameter(2, $city)
		->setParameter(3,false)
		->setParameter(4,false)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * retourne le nombre de commnetaires d'agendas de la ville courante
	 */
	public function getAgendaCommentNumber($city) {
	
		$qb = $this->createQueryBuilder("p")
		->select("count(p)")
		->from('CTRV\EventBundle\Entity\Event','a')
		->where("p.idEntity=a.id")
		->andwhere("p.typeEntity=?1")
		->andWhere("a.city=?2")
		->andWhere('a.isPrivate=?3')
		->andWhere('a.isRealtime=?4')
		->orderBy('p.date', 'DESC')
		->setParameter(1, Constants::TYPE_ENTIY_AGENDA)
		->setParameter(2, $city)
		->setParameter(3,false)
		->setParameter(4,false)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * retourne la liste de commnetaires d'événements de la ville courante
	 */
   public function getEventComment($city, $first, $last) {
   	
		$qb = $this->createQueryBuilder("p")
		->select('p as comment')
		->from('CTRV\EventBundle\Entity\Event','a')
		->addSelect('a.title')
		->where("p.idEntity=a.id")
		->andwhere("p.typeEntity=?1")
		->andWhere("a.city=?2")
		->andWhere('a.isPrivate=?3')
		->andWhere('a.isRealtime=?4')
		->orderBy('p.date', 'DESC')
		->setParameter(1, Constants::TYPE_ENTIY_EVENT)
		->setParameter(2, $city)
		->setParameter(3,false)
		->setParameter(4,true)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * retourne le nombre de commnetaires d'événements de la ville courante
	 */
	public function getEventCommentNumber($city) {
	
		$qb = $this->createQueryBuilder("p")
		->select("count(p)")
		->from('CTRV\EventBundle\Entity\Event','a')
		->where("p.idEntity=a.id")
		->andwhere("p.typeEntity=?1")
		->andWhere("a.city=?2")
		->andWhere('a.isPrivate=?3')
		->andWhere('a.isRealtime=?4')
		->orderBy('p.date', 'DESC')
		->setParameter(1, Constants::TYPE_ENTIY_EVENT)
		->setParameter(2, $city)
		->setParameter(3,false)
		->setParameter(4,true)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * retourne la liste de commnetaires de places de la ville courante
	 */   
   public function getPlaceComment($city, $first, $last) {
   	
		$qb = $this->createQueryBuilder("p")
		->select('p as comment')
		->from('CTRV\PlaceBundle\Entity\Place','a')
		->addSelect('a.title')
		->where("p.idEntity=a.id")
		->andwhere("p.typeEntity=?1")
		->andWhere("a.city=?2")
		->orderBy('p.date', 'DESC')
		->setParameter(1, Constants::TYPE_ENTIY_PLACE)
		->setParameter(2, $city)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * retourne la liste de commnetaires de places de la ville courante
	 */
	public function getPlaceCommentNumber($city) {
	
		$qb = $this->createQueryBuilder("p")
		->select("count(p)")
		->from('CTRV\PlaceBundle\Entity\Place','a')
		->where("p.idEntity=a.id")
		->andwhere("p.typeEntity=?1")
		->andWhere("a.city=?2")
		->orderBy('p.date', 'DESC')
		->setParameter(1, Constants::TYPE_ENTIY_PLACE)
		->setParameter(2, $city)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * Retourne la liste de tous les commentaires signalés des évenements de la ville courante
	 */
	public function getEventCommentAbuse($city, $first, $last) {
		
		$qb= $this->createQueryBuilder("c")
		->select("a.entityType, c.content,c.date, c.id")
		->from('CTRV\CommonBundle\Entity\Abuse','a')
		->from('CTRV\EventBundle\Entity\Event','e')
		->addSelect("e.title")
		->where("a.entityId=c.id")
		->andWhere("c.typeEntity=?2")
		->andWhere("e.id=c.idEntity")
		->andWhere("a.entityType=?1")
		->orderBy("a.id","desc")
		->setFirstResult($first)
		->setMaxResults($last)
		->setParameter(1,Constants::TYPE_ENTIY_EVENT)
		->setParameter(2,Constants::TYPE_ENTIY_EVENT)
		->groupBy('a.entityId')
		;
		
		return $qb->getQuery()->getResult();
	}
	
	
	
	public function getAllCommentAbusesNumber () {
		$qb= $this->createQueryBuilder("a")
		->select("count(c.id)")
		->from('CTRV\CommonBundle\Entity\Comment','c')
		->where("a.entityId=c.id")
		->orderBy("a.id","desc")
		->groupBy('a.entityId')
		;
	
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * Retourne le nombre de commentaires signalés des évenements de la ville courante
	 */
	public function getEventCommentAbuseNumber($city){
		
		$qb= $this->createQueryBuilder("c")
		->select("count (distinct c.id)")
		->from('CTRV\CommonBundle\Entity\Abuse','a')
		->from('CTRV\EventBundle\Entity\Event','e')
		->where("a.entityId=c.id")
		->andWhere("c.typeEntity=?2")
		->andWhere("e.id=c.idEntity")
		->andWhere("a.entityType=?1")
		->orderBy("a.id","desc")
		->setParameter(1,Constants::TYPE_ENTIY_EVENT)
		->setParameter(2,Constants::TYPE_ENTIY_EVENT)
		->groupBy('a.entityId')
		;
		
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	
	/**
	 * Retourne la liste de tous les abus sur les commentaires des places
	 */
	public function getPlaceCommentAbuse($city, $first, $last) {
		$qb= $this->createQueryBuilder("c")
		->select("a.entityId, a.entityType, c.content,c.date, c.id")
		->from('CTRV\CommonBundle\Entity\Abuse','a')
		->from('CTRV\PlaceBundle\Entity\Place','p')
		->addSelect("p.title")
		->where("a.entityId=c.id")
		->andWhere("c.typeEntity=?2")
		->andWhere("p.id=c.idEntity")
		->andWhere("a.entityType=?1")
		->setFirstResult($first)
		->setMaxResults($last)
		->setParameter(1,Constants::TYPE_ENTIY_PLACE)
		->setParameter(2,Constants::TYPE_ENTIY_PLACE)
		->groupBy('a.entityId')
		;
		return $qb->getQuery()->getResult();
	}
	
	
	/**
	 * Retourne la liste de tous les abus sur les commentaires des places
	 */
	public function getPlaceCommentAbuseNumber($city) {
		$qb= $this->createQueryBuilder("c")
		->select("count (distinct c.id)")
		->from('CTRV\CommonBundle\Entity\Abuse','a')
		->from('CTRV\PlaceBundle\Entity\Place','p')
		->where("a.entityId=c.id")
		->andWhere("c.typeEntity=?2")
		->andWhere("p.id=c.idEntity")
		->andWhere("a.entityType=?1")
		->setParameter(1,Constants::TYPE_ENTIY_PLACE)
		->setParameter(2,Constants::TYPE_ENTIY_PLACE)
		->groupBy('a.entityId')
		;
		
		return $qb->getQuery()->getSingleScalarResult();
	}
}