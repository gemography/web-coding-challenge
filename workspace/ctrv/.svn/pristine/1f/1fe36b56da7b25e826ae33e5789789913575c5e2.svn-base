<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CTRV\CommonBundle\Entity\Filtre
 *
 * @ORM\Table(name="filter")
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\FiltreRepository")
 */
class Filter
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $entityType
     *
     * @ORM\Column(name="entity_type", type="string", length=255)
     */
    private $entityType;
    
    /**
     * @var string $filterVisibility
     *
     * @ORM\Column(name="filter_visibility", type="string", length=255)
     */
    private $filterVisibility;

    /**
     * @var integer $distance
     *
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;
    
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="owner_userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set entityType
     *
     * @param string $entityType
     * @return Filtre
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
    
        return $this;
    }

    /**
     * Get entityType
     *
     * @return string 
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     * @return Filtre
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    
        return $this;
    }

    /**
     * Get distance
     *
     * @return integer 
     */
    public function getDistance()
    {
        return $this->distance;
    }
}
