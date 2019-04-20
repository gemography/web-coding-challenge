<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer $idContact
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean $isAccepted
     *
     * @ORM\Column(name="is_accepted", type="boolean", nullable=true)
     */
    private $isAccepted;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User",inversedBy="contacts")
     * @JoinColumn(name="owner_userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $ownerUserid;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User",inversedBy="owners")
     * @JoinColumn(name="contact_public_key",referencedColumnName="public_key", onDelete="CASCADE")
     */
    private $contactPublicKey;


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
     * Set isAccepted
     *
     * @param boolean $isAccepted
     * @return Contact
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

    /**
     * Set ownerUserid
     *
     * @param CTRV\CommonBundle\Entity\User $ownerUserid
     * @return Contact
     */
    public function setOwnerUserid(\CTRV\CommonBundle\Entity\User $ownerUserid = null)
    {
        $this->ownerUserid = $ownerUserid;
    
        return $this;
    }

    /**
     * Get ownerUserid
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getOwnerUserid()
    {
        return $this->ownerUserid;
    }

    /**
     * Set contactPublicKey
     *
     * @param CTRV\CommonBundle\Entity\User $contactPublicKey
     * @return Contact
     */
    public function setContactPublicKey(\CTRV\CommonBundle\Entity\User $contactPublicKey = null)
    {
        $this->contactPublicKey = $contactPublicKey;
    
        return $this;
    }

    /**
     * Get contactPublicKey
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getContactPublicKey()
    {
        return $this->contactPublicKey;
    }
}