<?php

namespace CTRV\PlaceBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\PlaceBundle\Entity\Place
 * @ORM\Table(name="place")
 * @ORM\Entity(repositoryClass="CTRV\PlaceBundle\Entity\PlaceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Place
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
     * @var string $activity
     * @ORM\Column(name="activity", type="text", nullable=true)
     */
    private $activity;

    /**
     * @var string $latitude
     *
     * @ORM\Column(name="latitude", type="string", length=256, nullable=true)
     */
    private $latitude;

    /**
     * @var string $longitude
     *
     * @ORM\Column(name="longitude", type="string", length=256, nullable=true)
     */
    private $longitude;

    /**
     * @var boolean $isApproximateAddress
     *
     * @ORM\Column(name="is_approximate_address", type="boolean", nullable=true)
     */
    private $isApproximateAddress;

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
     * @var string $siteUrl
     *
     * @ORM\Column(name="site_url", type="text", nullable=true)
     */
    private $siteUrl;

    /**
     * @var string $town
     *
     * @ORM\Column(name="town", type="string", length=256, nullable=true)
     */
    private $town;

    /**
     * @var string $street
     *
     * @ORM\Column(name="street", type="text", nullable=true)
     */
    private $street;

    /**
     * @var integer $mark
     *
     * @ORM\Column(name="mark", type="float", nullable=true)
     */
    private $mark;
    
    /**
     * @var string $tel
     *
     * @ORM\Column(name="tel", type="string", length=256, nullable=true)
     */
    private $tel;
    
    /**
     * @var string $tel2
     *
     * @ORM\Column(name="tel2", type="string", length=256, nullable=true)
     */
    private $tel2;
    
    /**
     *
     * @ORM\Column(name="mobile", type="string", length=256, nullable=true)
     */
    private $mobile;
    
    /**
     * @ORM\Column(name="code_postal", type="string", length=256, nullable=true)
     */
    private $codePostal;
    
    /**
     * @ORM\Column(name="fax", type="string", length=256, nullable=true)
     */
    private $fax;
    
    /**
     * @var integer $numberMark
     *
     * @ORM\Column(name="number_mark", type="integer", nullable=true)
     */
    private $numberMark;

    /**
     * @var \DateTime $addedDate
     *
     * @ORM\Column(name="added_date", type="datetime", nullable=true)
     */
    private $addedDate;

    /**
     * @var integer $eventTypeId
     * @ORM\ManyToOne(targetEntity="PlaceType")
     * @JoinColumn(name="place_type_id",referencedColumnName="id")
     */
    private $placeType;

    /**
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="places")
     * @JoinColumn(name="userid",referencedColumnName="userid")
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User")
     * @JoinColumn(name="owner_userid",referencedColumnName="userid")
     */
    private $owner;
    
    /**
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\City")
     * @JoinColumn(name="city_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $city;

    
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    
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
     * Set activity
     *
     * @param string $activity
     * @return Place
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    
        return $this;
    }

    /**
     * Get activity
     *
     * @return string 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Place
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
     * @return Place
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
     * Set isApproximateAddress
     *
     * @param boolean $isApproximateAddress
     * @return Place
     */
    public function setIsApproximateAddress($isApproximateAddress)
    {
        $this->isApproximateAddress = $isApproximateAddress;
    
        return $this;
    }

    /**
     * Get isApproximateAddress
     *
     * @return boolean 
     */
    public function getIsApproximateAddress()
    {
        return $this->isApproximateAddress;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Place
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
     * @return Place
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
     * Set siteUrl
     *
     * @param string $siteUrl
     * @return Place
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;
    
        return $this;
    }

    /**
     * Get siteUrl
     *
     * @return string 
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return Place
     */
    public function setTown($town)
    {
        $this->town = $town;
    
        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Place
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
     * @return Place
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
     * @return Place
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
     * Set addedDate
     *
     * @param \DateTime $addedDate
     * @return Place
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
     * Set placeType
     *
     * @param CTRV\PlaceBundle\Entity\PlaceType $placeType
     * @return Place
     */
    public function setPlaceType(\CTRV\PlaceBundle\Entity\PlaceType $placeType = null)
    {
        $this->placeType = $placeType;
    
        return $this;
    }

    /**
     * Get placeType
     *
     * @return CTRV\PlaceBundle\Entity\PlaceType 
     */
    public function getPlaceType()
    {
        return $this->placeType;
    }

    /**
     * Set auteur
     *
     * @param CTRV\CommonBundle\Entity\User $auteur
     * @return Place
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
     * Set city
     *
     * @param CTRV\CommonBundle\Entity\City $city
     * @return Place
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
     * Set tel
     *
     * @param string $tel
     * @return Place
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set owner
     *
     * @param CTRV\CommonBundle\Entity\User $owner
     * @return Place
     */
    public function setOwner(\CTRV\CommonBundle\Entity\User $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     * @return Place
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;
    
        return $this;
    }

    /**
     * Get tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Place
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Place
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Place
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}