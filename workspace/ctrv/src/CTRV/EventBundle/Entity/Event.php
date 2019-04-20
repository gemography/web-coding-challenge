<?php

namespace CTRV\EventBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="CTRV\EventBundle\Entity\EventRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Event
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @var \DateTime $addedDate
     *
     * @ORM\Column(name="last_update_date", type="datetime", nullable=true)
     */
    private $lastUpdateDate;

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
     * @var integer $mark
     *
     * @ORM\Column(name="mark", type="float", nullable=true)
     */
    private $mark;

    /**
     * @var integer $numberMark
     *
     * @ORM\Column(name="number_mark", type="integer", nullable=true)
     */
    private $numberMark;
    
    /**
     * @var integer $isPrivate
     *
     * @ORM\Column(name="is_private", type="boolean", nullable=false)
     */
    private $isPrivate=0;
    
    /**
     * @var string $visibility
     *
     * @ORM\Column(name="visibility", type="string", length=255, nullable=true)
     */
    private $visibility;
    
    /**
     * @var string $accessRight
     *
     * @ORM\Column(name="access_right", type="string", length=255, nullable=true)
     */
    private $accessRight;
    
    /**
     * @var string $type
     *
     * @ORM\Column(name="is_realtime", type="boolean",nullable=false)
     */
    private $isRealtime=0;
    
    public function __toString() {
    	return $this->title;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function setAddedDateValue () {
    	$this->addedDate = new \DateTime();
    }
    
   /**
     * @var integer $cityId
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\City")
     * @JoinColumn(name="city_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $city;
    
    /**
     * @var integer $eventTypeId
     * @ORM\ManyToOne(targetEntity="EventType")
     * @JoinColumn(name="event_type_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $eventType;
    
    /**
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="events")
     * @JoinColumn(name="userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $auteur;
    
    /**
     * @ORM\OneToMany(targetEntity="Event",mappedBy="event")
     * @var unknown_type
     */
    private $eventUpdates;
    
    
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
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * Set mark
     *
     * @param integer $mark
     * @return Event
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    
        return $this;
    }

    /**
     * Get mark
     *
     * @return integer 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set numberMark
     *
     * @param integer $numberMark
     * @return Event
     */
    public function setNumberMark($numberMark)
    {
        $this->numberMark = $numberMark;
    
        return $this;
    }

    /**
     * Get numberMark
     *
     * @return integer 
     */
    public function getNumberMark()
    {
        return $this->numberMark;
    }

    /**
     * Set city
     *
     * @param CTRV\CommonBundle\Entity\City $city
     * @return Event
     */
    public function setCity(\CTRV\CommonBundle\Entity\City $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return CTRV\CommonBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set eventType
     *
     * @param CTRV\CommonBundle\Entity\EventType $eventType
     * @return Event
     */
    public function setEventType(EventType $eventType = null)
    {
        $this->eventType = $eventType;
    
        return $this;
    }

    /**
     * Get eventType
     *
     * @return CTRV\CommonBundle\Entity\EventType 
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set auteur
     *
     * @param CTRV\CommonBundle\Entity\User $auteur
     * @return Event
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


    /**
     * Set isPrivate
     *
     * @param boolean $isPrivate
     * @return Event
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
    }

    /**
     * Get isPrivate
     *
     * @return boolean 
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }
    
    /**
     * Set visibility
     *
     * @param string $visibility
     * @return Event
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    
        return $this;
    }

    /**
     * Get visibility
     *
     * @return string 
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set accessRight
     *
     * @param string $accessRight
     * @return Event
     */
    public function setAccessRight($accessRight)
    {
        $this->accessRight = $accessRight;
    
        return $this;
    }

    /**
     * Get accessRight
     *
     * @return string 
     */
    public function getAccessRight()
    {
        return $this->accessRight;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * Set isRealtime
     *
     * @param boolean $isRealtime
     * @return Event
     */
    public function setIsRealtime($isRealtime)
    {
        $this->isRealtime = $isRealtime;
    
        return $this;
    }

    /**
     * Get isRealtime
     *
     * @return boolean 
     */
    public function getIsRealtime()
    {
        return $this->isRealtime;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventUpdates = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set lastUpdateDate
     *
     * @param \DateTime $lastUpdateDate
     * @return Event
     */
    public function setLastUpdateDate($lastUpdateDate)
    {
        $this->lastUpdateDate = $lastUpdateDate;
    
        return $this;
    }

    /**
     * Get lastUpdateDate
     *
     * @return \DateTime 
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }

    /**
     * Add eventUpdates
     *
     * @param CTRV\EventBundle\Entity\Event $eventUpdates
     * @return Event
     */
    public function addEventUpdate(\CTRV\EventBundle\Entity\Event $eventUpdates)
    {
        $this->eventUpdates[] = $eventUpdates;
    
        return $this;
    }

    /**
     * Remove eventUpdates
     *
     * @param CTRV\EventBundle\Entity\Event $eventUpdates
     */
    public function removeEventUpdate(\CTRV\EventBundle\Entity\Event $eventUpdates)
    {
        $this->eventUpdates->removeElement($eventUpdates);
    }

    /**
     * Get eventUpdates
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEventUpdates()
    {
        return $this->eventUpdates;
    }
}