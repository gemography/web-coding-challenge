<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CTRV\CommonBundle\Entity\UserBlackList
 *
 * @ORM\Table(name="user_blacklist")
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\UserBlackListRepository")
 */
class UserBlackList
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
     * @var \DateTime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User",inversedBy="blockedContacts")
     * @JoinColumn(name="contact_public_key",referencedColumnName="public_key", onDelete="CASCADE")
     */
    private $contact;
    
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User",inversedBy="blockedContacts")
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
     * Set date
     *
     * @param \DateTime $date
     * @return UserBlackList
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contact
     *
     * @param CTRV\CommonBundle\Entity\User $contact
     * @return UserBlackList
     */
    public function setContact(\CTRV\CommonBundle\Entity\User $contact = null)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set user
     *
     * @param CTRV\CommonBundle\Entity\User $user
     * @return UserBlackList
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
}