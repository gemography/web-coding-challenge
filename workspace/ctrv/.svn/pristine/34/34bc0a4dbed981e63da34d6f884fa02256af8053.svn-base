<?php

namespace CTRV\FlowBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\GroupUser
 *
 * @ORM\Table(name="group_user")
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="CTRV\FlowBundle\Entity\GroupUserRepository")
 */
class GroupUser
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=256, nullable=false)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $addedDate
     *
     * @ORM\Column(name="added_date", type="string", length=256, nullable=true)
     */
    private $addedDate;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="groupsAdmin")
     * @JoinColumn(name="userid_admin",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $admin;
    
    
    /**
     * @ORM\OneToMany(targetEntity="\CTRV\FlowBundle\Entity\PendingPrivateMessage",mappedBy="receiver_group_id")
     * @var unknown_type
     */
    private $pendingsPrivateGroupMessages;
    
    /**
     * @var string $isBlocked
     * @ORM\Column(name="is_blocked", type="boolean")
     */
    private $isBlocked;


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
     * @return GroupUser
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
     * Set description
     *
     * @param string $description
     * @return GroupUser
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
     * Set addedDate
     *
     * @param string $addedDate
     * @return GroupUser
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;
    
        return $this;
    }

    /**
     * Get addedDate
     *
     * @return string 
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set admin
     *
     * @param CTRV\CommonBundle\Entity\User $admin
     * @return GroupUser
     */
    public function setAdmin(\CTRV\CommonBundle\Entity\User $admin = null)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getAdmin()
    {
        return $this->admin;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pendingsPrivateGroupMessages = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add pendingsPrivateGroupMessages
     *
     * @param CTRV\FlowBundle\Entity\PendingPrivateMessage $pendingsPrivateGroupMessages
     * @return GroupUser
     */
    public function addPendingsPrivateGroupMessage(\CTRV\FlowBundle\Entity\PendingPrivateMessage $pendingsPrivateGroupMessages)
    {
        $this->pendingsPrivateGroupMessages[] = $pendingsPrivateGroupMessages;
    
        return $this;
    }

    /**
     * Remove pendingsPrivateGroupMessages
     *
     * @param CTRV\FlowBundle\Entity\PendingPrivateMessage $pendingsPrivateGroupMessages
     */
    public function removePendingsPrivateGroupMessage(\CTRV\FlowBundle\Entity\PendingPrivateMessage $pendingsPrivateGroupMessages)
    {
        $this->pendingsPrivateGroupMessages->removeElement($pendingsPrivateGroupMessages);
    }

    /**
     * Get pendingsPrivateGroupMessages
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPendingsPrivateGroupMessages()
    {
        return $this->pendingsPrivateGroupMessages;
    }

    /**
     * Set isBlocked
     *
     * @param boolean $isBlocked
     * @return GroupUser
     */
    public function setIsBlocked($isBlocked)
    {
        $this->isBlocked = $isBlocked;
    
        return $this;
    }

    /**
     * Get isBlocked
     *
     * @return boolean 
     */
    public function getIsBlocked()
    {
        return $this->isBlocked;
    }
}