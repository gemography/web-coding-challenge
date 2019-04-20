<?php

namespace CTRV\EventBundle\Entity;

use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CTRV\EventBundle\Entity\UpdatedEvent
 *
 * @ORM\Table(name="updated_event")
 * @ORM\Entity(repositoryClass="CTRV\EventBundle\Entity\UpdatedEventRepository")
 * @HasLifecycleCallbacks()
 */
class UpdatedEvent
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
     * @var string $latitude
     *
     * @ORM\Column(name="latitude", type="string", length=256, nullable=false)
     */
    private $latitude;
    
    /**
     * @var string $longitude
     *
     * @ORM\Column(name="longitude", type="string", length=256, nullable=false)
     */
    private $longitude;
    
    /**
     * @var integer $duration
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;
    
    /**
     * @var \DateTime $addedDate
     *
     * @ORM\Column(name="added_date", type="datetime", nullable=true)
     */
    private $addedDate;
    
    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=256, nullable=false)
     */
    private $title;
    
    /**
     * @var string $street
     *
     * @ORM\Column(name="street", type="string", length=256, nullable=true)
     */
    private $street;
    
    /**
     * @var string $startDate
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;
    
    /**
     * @var string $endDate
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;
    
    /**
     * @var string $startTime
     *
     * @ORM\Column(name="start_time", type="string", length=256, nullable=true)
     */
    private $startTime;
    
    /**
     * @var string $endTime
     *
     * @ORM\Column(name="end_time", type="string", length=256, nullable=true)
     */
    private $endTime;
    
    /**
     * @ORM\ManyToOne(targetEntity="Event",inversedBy="eventUpdates")
     * @JoinColumn(name="event_id",referencedColumnName="id", onDelete="CASCADE")
     * @var unknown_type
     */
    private $event;
    
    /**
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="updated_events")
     * @JoinColumn(name="userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $auteur;
    
    /**
     * @ORM\PrePersist
     */
    public function setAddedDateValue () {
    	$this->addedDate = new \DateTime();
    }

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
     * Set latitude
     *
     * @param string $latitude
     * @return UpdatedEvent
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return UpdatedEvent
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return UpdatedEvent
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    
        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set addedDate
     *
     * @param \DateTime $addedDate
     * @return UpdatedEvent
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;
    
        return $this;
    }

    /**
     * Get addedDate
     *
     * @return \DateTime 
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return UpdatedEvent
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return UpdatedEvent
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return UpdatedEvent
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return UpdatedEvent
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return UpdatedEvent
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set startTime
     *
     * @param string $startTime
     * @return UpdatedEvent
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    
        return $this;
    }

    /**
     * Get startTime
     *
     * @return string 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param string $endTime
     * @return UpdatedEvent
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    
        return $this;
    }

    /**
     * Get endTime
     *
     * @return string 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set event
     *
     * @param CTRV\EventBundle\Entity\Event $event
     * @return UpdatedEvent
     */
    public function setEvent(\CTRV\EventBundle\Entity\Event $event = null)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return CTRV\EventBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set auteur
     *
     * @param CTRV\CommonBundle\Entity\User $auteur
     * @return UpdatedEvent
     */
    public function setAuteur(\CTRV\CommonBundle\Entity\User $auteur = null)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}