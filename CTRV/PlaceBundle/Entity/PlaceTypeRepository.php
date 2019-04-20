<?php

namespace CTRV\PlaceBundle\Entity;
use Doctrine\ORM\EntityRepository;



class PlaceTypeRepository extends EntityRepository
{
	
/**
 * retourne la liste de tous les types de places 
 */
    public function getTypePlaces($first, $last){
	    $qb= $this->createQueryBuilder("p")
	    ->orderBy('p.code','ASC')
	    ->setFirstResult($first)
	    ->setMaxResults($last)
	    ;
	return $qb->getQuery()->getResult();
    
    }

    /**
     * retourne le nombre total de types de places
     */
    public function getTypePlacesNumber(){
    	$qb= $this->createQueryBuilder("p")
    	->select('count(p)')
       	;
    	return $qb->getQuery()->getSingleScalarResult();
    
    }

}