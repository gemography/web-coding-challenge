<?php

namespace CTRV\FlowBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\GroupMember
 *
 * @ORM\Table(name="group_member", uniqueConstraints={@ORM\UniqueConstraint(name="cleUnique", columns={"userid", "group_id"})})
 * @ORM\Entity
 */
class GroupMember
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
     * @var boolean $isAccepted
     *
     * @ORM\Column(name="is_accepted", type="boolean", nullable=false)
     */
    private $isAccepted;

    /**
     * @var GroupUser
     * @ORM\ManyToOne(targetEntity="GroupUser",inversedBy="members")
     * @JoinColumn(name="group_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $groupUser;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="groupsMember")
     * @JoinColumn(name="userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $member;



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
     * @return GroupMember
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
     * Set groupUser
     *
     * @param CTRV\CommonBundle\Entity\GroupUser $groupUser
     * @return GroupMember
     */
    public function setGroupUser(GroupUser $groupUser = null)
    {
        $this->groupUser = $groupUser;
    
        return $this;
    }

    /**
     * Get groupUser
     *
     * @return CTRV\CommonBundle\Entity\GroupUser 
     */
    public function getGroupUser()
    {
        return $this->groupUser;
    }

    /**
     * Set member
     *
     * @param CTRV\CommonBundle\Entity\User $member
     * @return GroupMember
     */
    public function setMember(\CTRV\CommonBundle\Entity\User $member = null)
    {
        $this->member = $member;
    
        return $this;
    }

    /**
     * Get member
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getMember()
    {
        return $this->member;
    }
}