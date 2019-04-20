<?php

namespace CTRV\FlowBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\FlowBundle\Entity\PendingPrivateMessage
 *
 * @ORM\Table(name="pending_private_message")
 * @ORM\Entity
 */
class PendingPrivateMessage
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
     * @var User
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="sentPendingsPrivateMessages")
     * @JoinColumn(name="sender_userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $sender;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="receivedPendingsPrivateMessages")
     * @JoinColumn(name="receiver_userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $receiver;
    
    /**
     * @var unknown_type
     * @ORM\ManyToOne(targetEntity="\CTRV\FlowBundle\Entity\GroupUser",inversedBy="pendingsPrivateGroupMessages")
     * @JoinColumn(name="receiver_group_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $receiver_group;
    
    /**
     * @ORM\ManyToOne(targetEntity="\CTRV\FlowBundle\Entity\PrivateMessage",inversedBy="pendingsPrivateGroupMessages")
     * @JoinColumn(name="private_message_id",referencedColumnName="id", onDelete="CASCADE")
     * @var unknown_type
     */
    private $private_message;



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
     * Set senderUserid
     *
     * @param CTRV\CommonBundle\Entity\User $senderUserid
     * @return PendingPrivateMessage
     */
    public function setSenderUserid(\CTRV\CommonBundle\Entity\User $senderUserid = null)
    {
        $this->senderUserid = $senderUserid;
    
        return $this;
    }

    /**
     * Get senderUserid
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getSenderUserid()
    {
        return $this->senderUserid;
    }

    /**
     * Set receiverUserid
     *
     * @param CTRV\CommonBundle\Entity\User $receiverUserid
     * @return PendingPrivateMessage
     */
    public function setReceiverUserid(\CTRV\CommonBundle\Entity\User $receiverUserid = null)
    {
        $this->receiverUserid = $receiverUserid;
    
        return $this;
    }

    /**
     * Get receiverUserid
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getReceiverUserid()
    {
        return $this->receiverUserid;
    }

    /**
     * Set sender
     *
     * @param CTRV\CommonBundle\Entity\User $sender
     * @return PendingPrivateMessage
     */
    public function setSender(\CTRV\CommonBundle\Entity\User $sender = null)
    {
        $this->sender = $sender;
    
        return $this;
    }

    /**
     * Get sender
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param CTRV\CommonBundle\Entity\User $receiver
     * @return PendingPrivateMessage
     */
    public function setReceiver(\CTRV\CommonBundle\Entity\User $receiver = null)
    {
        $this->receiver = $receiver;
    
        return $this;
    }

    /**
     * Get receiver
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }




    /**
     * Set receiver_group
     *
     * @param CTRV\FlowBundle\Entity\GroupUser $receiverGroup
     * @return PendingPrivateMessage
     */
    public function setReceiverGroup(\CTRV\FlowBundle\Entity\GroupUser $receiverGroup = null)
    {
        $this->receiver_group = $receiverGroup;
    
        return $this;
    }

    /**
     * Get receiver_group
     *
     * @return CTRV\FlowBundle\Entity\GroupUser 
     */
    public function getReceiverGroup()
    {
        return $this->receiver_group;
    }

    /**
     * Set private_message
     *
     * @param CTRV\FlowBundle\Entity\PrivateMessage $privateMessage
     * @return PendingPrivateMessage
     */
    public function setPrivateMessage(\CTRV\FlowBundle\Entity\PrivateMessage $privateMessage = null)
    {
        $this->private_message = $privateMessage;
    
        return $this;
    }

    /**
     * Get private_message
     *
     * @return CTRV\FlowBundle\Entity\PrivateMessage 
     */
    public function getPrivateMessage()
    {
        return $this->private_message;
    }
}