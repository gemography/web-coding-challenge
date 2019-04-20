<?php

namespace CTRV\MailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\MailBundle\Entity\MailType
 *
 * @ORM\Table(name="mail_type")
 * @ORM\Entity(repositoryClass="CTRV\MailBundle\Entity\MailTypeRepository")
 */
class MailType
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
     * @var string $code
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;


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
     * Set code
     *
     * @param string $code
     * @return MailType
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
    
    public function __toString() {
    	return $this->code;
    } 
}