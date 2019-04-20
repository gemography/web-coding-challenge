<?php

namespace CTRV\PlaceBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\Mapping as ORM;


class PlaceRepository extends EntityRepository
{
	
	/**
	 * Retourne la liste des addresses en double dans la base
	 */
	public function getAddressInDouble ($city_id) {
		$qbtemp = $this->createQueryBuilder("p")
		->select("p.street")
		->where("p.city=?1")
		->groupBy("p.street")
		->having("count(p.id) >?2")
		->setParameter(1, $city_id)
		->setParameter(2, 1)
		;
		
		$list_address = $qbtemp->getQuery()->getResult();
		
		$addresses = array();
		foreach ($list_address as $item) {
			array_push($addresses, $item);
		}
		
		return $addresses;
	}
	
	/**
	 * Retourne la liste de tous les place dont les addresses existent en double.
	 * @param unknown_type $placeType
	 * @param unknown_type $city
	 */
	public function getPlacesHavinAddressInDoubleByCity ($city_id,$first, $last) {
		
		$addresses = $this->getAddressInDouble($city_id);
		
		$qb = $this->createQueryBuilder("p")
		->where("p.city=?1")
		->andWhere("p.street IN (?2)")
		->orderBy('p.street', 'ASC')
		->setParameter(1, $city_id)
		->setParameter(2, $addresses)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		
		return $qb->getQuery()->getResult();
	}
	
	
	/**
	 * Retourne le nombre de places dont les addresses existent en double.
	 * @param unknown_type $placeType
	 * @param unknown_type $city
	 */
	public function getPlacesHavinAddressInDoubleByCityNumber ($city_id) {
	
		$addresses = $this->getAddressInDouble($city_id);
	
		$qb = $this->createQueryBuilder("p")
		->select("count(p)")
		->where("p.city=?1")
		->andWhere("p.street IN (?2)")
		->orderBy('p.street', 'ASC')
		->setParameter(1, $city_id)
		->setParameter(2, $addresses)
		;
	
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	
	
	
	/**
     * Retourne la liste des places par types ajoutées par les utilisateurs
     * @param unknown_type $placeType
     * @param unknown_type $city
     */
	public function getPlaceAddedByUsers ($placeType, $city, $first, $last) {
		$qb = $this->createQueryBuilder("p")
		->where("p.auteur is not null")
		->andWhere("p.placeType=?1")
		->andWhere("p.city=?2")
		->orderBy('p.addedDate', 'DESC')
		->setParameter(1, $placeType)
		->setParameter(2, $city)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * Retourne le nombre de places par types ajoutées par les utilisateurs
	 * @param unknown_type $placeType
	 * @param unknown_type $city
	 */
	public function getPlaceAddedByUsersNumber ($placeType, $city) {
		$qb = $this->createQueryBuilder("p")
		->select('count(p)')
		->where("p.auteur is not null")
		->andWhere("p.placeType=?1")
		->andWhere("p.city=?2")
		->orderBy('p.addedDate', 'DESC')
		->setParameter(1, $placeType)
		->setParameter(2, $city)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	
	/**
	 * Retourne la liste des places par types 
	 * @param unknown_type $placeType
	 * @param unknown_type $city
	 */
	public function getPlacesByType ($placeType, $city, $first, $last) {
		$qb = $this->createQueryBuilder("p")
		->where("p.latitude is null OR p.longitude is null")
		->andWhere("p.placeType=?1")
		->andWhere("p.city=?2")
		->orderBy('p.addedDate', 'DESC')
		->setParameter(1, $placeType)
		->setParameter(2, $city)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * Retourne le nombre de places par types 
	 * @param unknown_type $placeType
	 * @param unknown_type $city
	 */
	public function getPlacesByTypeNumber ($placeType, $city) {
		$qb = $this->createQueryBuilder("p")
		->select('count(p)')
		->where("p.latitude is null OR p.longitude is null")
		->andWhere("p.placeType=?1")
		->andWhere("p.city=?2")
		->orderBy('p.addedDate', 'DESC')
		->setParameter(1, $placeType)
		->setParameter(2, $city)
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	
	/**
	 * Retourne la liste des places sans latitude ou longitude de la ville courante
	 * @param unknown_type $city
	 */
	public function getPlacesWithoutLatLong ($city, $first, $last) {
		$qb = $this->createQueryBuilder("p")
		->where("p.latitude is null OR p.longitude is null")
		->andWhere("p.city=?1")
		->orderBy('p.title', 'ASC')
		->setParameter(1, $city)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * Retourne le nombre de place sans latitude longitude de la ville courante
	 * @param unknown_type $city
	 */
	public function getPlacesWithoutLatLongNumber ($city) {
		$qb = $this->createQueryBuilder("p")
		->select('count(p)')
		->where("p.latitude is null OR p.longitude is null")
		->andWhere("p.city=?1")
		->setParameter(1, $city->getId())
		->getQuery()->getSingleScalarResult()
		;
		return $qb;
	}
	
	public function getLocalizedPlacesByCityNumber ($city) {
		$qb = $this->createQueryBuilder("p")
		->select('count(p)')
// 		->where("p.latitude is not null")
		->where("p.city=?1")
		->setParameter(1, $city)
		->getQuery()->getSingleScalarResult()
		;
		return $qb;
	}
	
	/**
	 * Retourne la liste des places sans description de la ville courante
	 * @param unknown_type $city
	 */
	public function getPlacesWithoutDescription ($city, $first, $last) {
		$qb = $this->createQueryBuilder("p")
		->where("p.description is null")
		->andWhere("p.city=?1")
		->orderBy('p.title', 'ASC')
		->setParameter(1, $city)
		->setFirstResult($first)
		->setMaxResults($last)
	
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * Retourne le nombre de place sans description de la ville courante
	 * @param unknown_type $city
	 */
	public function getPlacesWithoutDescriptionNumber ($city) {
		$qb = $this->createQueryBuilder("p")
		->select('count(p)')
		->where("p.description is null")
		->andWhere("p.city=?1")
		->orderBy('p.addedDate', 'DESC')
		->setParameter(1, $city->getId())
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * Retourne la liste des places de la rue spécifiée dans la ville courante
	 * @param unknown_type $searchText
	 */
	public function getPlaceByStreet ($searchText, $city, $first, $last) {
		$qb = $this->createQueryBuilder("p")
		->where("p.street like ?1")
		->andWhere("p.city=?2")
		->setParameter(1, "%".$searchText."%")
		->setParameter(2, $city)
		->setFirstResult($first)
		->setMaxResults($last)
		;
		return $qb->getQuery()->getResult();
	}
	
	/**
	 * 
	 * @param unknown_type $searchText
	 * @param unknown_type $city
	 */
	public function getPlaceByStreetNumber ($searchText, $city) {
		$qb = $this->createQueryBuilder("p")
		->select('count(p)')
		->where("p.street like ?1")
		->andWhere("p.city=?2")
		->setParameter(1, "%".$searchText."%")
		->setParameter(2, $city->getId())
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	
	/**
	 * Retourne le nombre de place localisée 
	 */
	public function getNotLocalizedPlaceNumber () {
		
		$qb = $this->createQueryBuilder("p")
		->select("count(p)")
		->where("p.latitude is null")
		->orWhere("p.longitude is null")
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
	/**
	 * Retourne le nombre total de place
	 */
	public function getAllPlaceNumber () {
	
		$qb = $this->createQueryBuilder("p")
		->select("count(p)")
		;
		return $qb->getQuery()->getSingleScalarResult();
	}
}