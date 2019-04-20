<?php

namespace CTRV\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CTRV\EventBundle\Entity\EventFollower
 *
 * @ORM\Table(name="event_follower")
 * @ORM\Entity(repositoryClass="CTRV\EventBundle\Entity\EventFollowerRepository")
 */
class EventFollower
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
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="followedEvents")
     * @JoinColumn(name="userid",referencedColumnName="userid", onDelete="CASCADE",nullable=false)
     */
    private $user;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;
    
    /**
     * @var integer $id_event_agenda
     *
     * @ORM\Column(name="id_event_agenda_place", type="integer", nullable=false)
     */
    private $id_event_agenda_place; //id de l'event ou de l'agenda selon le contenu de la colonne type

    /**
     * @var boolean $participate
     *
     * @ORM\Column(name="participate", type="boolean")
     */
    private $participate;

    /**
     * @var boolean $wasThere
     *
     * @ORM\Column(name="was_there", type="boolean")
     */
    private $wasThere;
    
    /**
     * @var boolean $participate
     *
     * @ORM\Column(name="is_accepted", type="boolean")
     */
    private $isAccepted;


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
     * Set type
     *
     * @param string $type
     * @return EventFollower
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set participate
     *
     * @param boolean $participate
     * @return EventFollower
     */
    public function setParticipate($participate)
    {
        $this->participate = $participate;
    
        return $this;
    }

    /**
     * Get participate
     *
     * @return boolean 
     */
    public function getParticipate()
    {
        return $this->participate;
    }

    /**
     * Set wasThere
     *
     * @param boolean $wasThere
     * @return EventFollower
     */
    public function setWasThere($wasThere)
    {
        $this->wasThere = $wasThere;
    
        return $this;
    }

    /**
     * Get wasThere
     *
     * @return boolean 
     */
    public function getWasThere()
    {
        return $this->wasThere;
    }

    /**
     * Set user
     *
     * @param CTRV\CommonBundle\Entity\User $user
     * @return EventFollower
     */
    public function setUser(\CTRV\CommonBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set id_event_agenda_place
     *
     * @param integer $idEventAgendaPlace
     * @return EventFollower
     */
    public function setIdEventAgendaPlace($idEventAgendaPlace)
    {
        $this->id_event_agenda_place = $idEventAgendaPlace;
    
        return $this;
    }

    /**
     * Get id_event_agenda_place
     *
     * @return integer 
     */
    public function getIdEventAgendaPlace()
    {
        return $this->id_event_agenda_place;
    }

    /**
     * Set isAccepted
     *
     * @param boolean $isAccepted
     * @return EventFollower
     */
    public function setIsAccepted($isAccepted)
    {
        $this->isAccepted = $isAccepted;
    
        return $this;
    }

    /**
     * Get isAccepted
     *
     * @return boolean 
     */
    public function getIsAccepted()
    {
        return $this->isAccepted;
    }
}