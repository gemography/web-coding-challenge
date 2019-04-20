<?php

namespace CTRV\CommonBundle\Entity;

use CTRV\FlowBundle\Entity\PublicMessage;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\CityRepository")
 */
class City
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @var string $latitude
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=false)
     */
    protected $latitude;

    /**
     * @var string $longitude
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=false)
     */
    protected $longitude;

    /**
     * @var string $latitudeInf
     *
     * @ORM\Column(name="latitude_inf", type="string", length=256, nullable=false)
     */
    protected $latitudeInf;

    /**
     * @var string $latitudeSup
     *
     * @ORM\Column(name="latitude_sup", type="string", length=256, nullable=false)
     */
    protected $latitudeSup;

    /**
     * @var string $longitudeInf
     *
     * @ORM\Column(name="longitude_inf", type="string", length=256, nullable=false)
     */
    protected $longitudeInf;

    /**
     * @var string $longitudeSup
     *
     * @ORM\Column(name="longitude_sup", type="string", length=256, nullable=false)
     */
    protected $longitudeSup;
    
    /**
     * @ORM\Column(name="default_address", type="string", length=255, nullable=false)
     */
    protected $defaultAddress;
    
    /**
     * @ORM\Column(name="default_zipcode", type="string", length=255, nullable=false)
     */
    protected $defaultZipcode;
    
    /**
     * @ORM\Column(name="default_address_longitude", type="string", length=255, nullable=false)
     */
    protected $defaultAddressLongitude;
    
    /**
     * @ORM\Column(name="default_address_latitude", type="string", length=255, nullable=false)
     */
    protected $defaultAddressLatitude;
    
    /**
     * @ORM\OneToMany(targetEntity="\CTRV\FlowBundle\Entity\PublicMessage",mappedBy="city")
     * @var unknown_type
     */
    protected $publicMessages;

    /**
     * @ORM\OneToMany(targetEntity="User",mappedBy="city")
     * @var unknown_type
     */
    protected $users;

    public function __toString() {
    	return ucfirst($this->name);
    }
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->publicMessages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return City
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
     * @return City
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
     * Set latitudeInf
     *
     * @param string $latitudeInf
     * @return City
     */
    public function setLatitudeInf($latitudeInf)
    {
        $this->latitudeInf = $latitudeInf;
    
        return $this;
    }

    /**
     * Get latitudeInf
     *
     * @return string 
     */
    public function getLatitudeInf()
    {
        return $this->latitudeInf;
    }

    /**
     * Set latitudeSup
     *
     * @param string $latitudeSup
     * @return City
     */
    public function setLatitudeSup($latitudeSup)
    {
        $this->latitudeSup = $latitudeSup;
    
        return $this;
    }

    /**
     * Get latitudeSup
     *
     * @return string 
     */
    public function getLatitudeSup()
    {
        return $this->latitudeSup;
    }

    /**
     * Set longitudeInf
     *
     * @param string $longitudeInf
     * @return City
     */
    public function setLongitudeInf($longitudeInf)
    {
        $this->longitudeInf = $longitudeInf;
    
        return $this;
    }

    /**
     * Get longitudeInf
     *
     * @return string 
     */
    public function getLongitudeInf()
    {
        return $this->longitudeInf;
    }

    /**
     * Set longitudeSup
     *
     * @param string $longitudeSup
     * @return City
     */
    public function setLongitudeSup($longitudeSup)
    {
        $this->longitudeSup = $longitudeSup;
    
        return $this;
    }

    /**
     * Get longitudeSup
     *
     * @return string 
     */
    public function getLongitudeSup()
    {
        return $this->longitudeSup;
    }
    
    /**
     * Set defaultAddress
     *
     * @param string $defaultAddress
     * @return City
     */
    public function setdefaultAddress($defaultAddress)
    {
    	$this->defaultAddress = $defaultAddress;
    
    	return $this;
    }
    
    /**
     * Get defaultAddress
     *
     * @return string
     */
    public function getDefaultAddress()
    {
    	return $this->defaultAddress;
    }
    
    /**
     * Set defaultZipcode
     *
     * @param string $defaultZipcode
     * @return City
     */
    public function setdefaultZipcode($defaultZipcode)
    {
    	$this->defaultZipcode = $defaultZipcode;
    
    	return $this;
    }
    
    /**
     * Get defaultZipcode
     *
     * @return string
     */
    public function getDefaultZipcode()
    {
    	return $this->defaultZipcode;
    }
    
    /**
     * Set defaultAddressLongitude
     *
     * @param string $defaultAddressLongitude
     * @return City
     */
    public function setdefaultAddressLongitude($defaultAddressLongitude)
    {
    	$this->defaultAddressLongitude = $defaultAddressLongitude;
    
    	return $this;
    }
    
    /**
     * Get defaultAddressLongitude
     *
     * @return string
     */
    public function getDefaultAddressLongitude()
    {
    	return $this->defaultAddressLongitude;
    }
    
    /**
     * Set defaultAddressLatitude
     *
     * @param string $defaultAddressLatitude
     * @return City
     */
    public function setdefaultAddressLatitude($defaultAddressLatitude)
    {
    	$this->defaultAddressLatitude = $defaultAddressLatitude;
    
    	return $this;
    }
    
    /**
     * Get defaultAddressLatitude
     *
     * @return string
     */
    public function getDefaultAddressLatitude()
    {
    	return $this->defaultAddressLatitude;
    }

    /**
     * Add publicMessages
     *
     * @param CTRV\CommonBundle\Entity\PublicMessage $publicMessages
     * @return City
     */
    public function addPublicMessage(PublicMessage $publicMessages)
    {
        $this->publicMessages[] = $publicMessages;
    
        return $this;
    }

    /**
     * Remove publicMessages
     *
     * @param CTRV\CommonBundle\Entity\PublicMessage $publicMessages
     */
    public function removePublicMessage(PublicMessage $publicMessages)
    {
        $this->publicMessages->removeElement($publicMessages);
    }

    /**
     * Get publicMessages
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPublicMessages()
    {
        return $this->publicMessages;
    }

    /**
     * Add users
     *
     * @param CTRV\CommonBundle\Entity\User $users
     * @return City
     */
    public function addUser(\CTRV\CommonBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param CTRV\CommonBundle\Entity\User $users
     */
    public function removeUser(\CTRV\CommonBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}