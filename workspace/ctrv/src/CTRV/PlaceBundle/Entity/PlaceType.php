<?php

namespace CTRV\PlaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\PlaceBundle\Entity\PlaceType
 * @ORM\Table(name="place_type")
 * @ORM\Entity(repositoryClass="CTRV\PlaceBundle\Entity\PlaceTypeRepository")
 * 
 */
class PlaceType
{
     /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=256, nullable=false)
     */
    private $label;

    /**
     * @var string $code
     *
     * @ORM\Column(name="code", type="string", length=256, nullable=true)
     */
    private $code;

    /**
     * @var string $language
     *
     * @ORM\Column(name="language", type="string", length=256, nullable=false)
     */
    private $language;
    
    /**
     *
     * @ORM\Column(name="img_url", type="string", length=256, nullable=true)
     */
    private $img_url;

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
     * Set label
     *
     * @param string $label
     * @return PlaceType
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    public function __toString() {
    	return $this->label;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return PlaceType
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return PlaceType
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set img_url
     *
     * @param string $imgUrl
     * @return PlaceType
     */
    public function setImgUrl($imgUrl)
    {
        $this->img_url = $imgUrl;
    
        return $this;
    }

    /**
     * Get img_url
     *
     * @return string 
     */
    public function getImgUrl()
    {
        return $this->img_url;
    }
}