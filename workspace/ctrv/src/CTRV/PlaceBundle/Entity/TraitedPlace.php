<?php

namespace CTRV\PlaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\PlaceBundle\Entity\TraitedPlace
 *
 * @ORM\Table(name="traited_place",uniqueConstraints={@ORM\UniqueConstraint(name="useridUnique", columns={"idPlace"})})
 * @ORM\Entity(repositoryClass="CTRV\PlaceBundle\Entity\TraitedPlaceRepository")
 */
class TraitedPlace
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
     * @var integer $mark
     *
     * @ORM\Column(name="idPlace", type="integer", nullable=false)
     */
    private $idPlace;
    
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
     * Set idPlace
     *
     * @param integer $idPlace
     * @return TraitedPlace
     */
    public function setIdPlace($idPlace)
    {
        $this->idPlace = $idPlace;
    
        return $this;
    }

    /**
     * Get idPlace
     *
     * @return integer 
     */
    public function getIdPlace()
    {
        return $this->idPlace;
    }
}