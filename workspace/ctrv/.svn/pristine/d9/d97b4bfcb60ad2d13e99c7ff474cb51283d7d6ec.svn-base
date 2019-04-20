<?php

namespace CTRV\FlowBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\FlowBundle\Entity\PrivateMessage
 *
 * @ORM\Table(name="private_message")
 * @ORM\Entity
 */
class PrivateMessage
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
     * @var string $date
     *
     * @ORM\Column(name="date", type="datetime",nullable=false)
     */
    private $date;

    /**
     * @var string $content
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var boolean $senderStock
     *
     * @ORM\Column(name="sender_stock", type="boolean", nullable=false)
     */
    private $senderStock;

    /**
     * @var boolean $receiverStock
     *
     * @ORM\Column(name="receiver_stock", type="boolean", nullable=false)
     */
    private $receiverStock;

    /**
     * @var boolean $isDemand
     *
     * @ORM\Column(name="is_demand", type="boolean", nullable=true)
     */
    private $isDemand;
    
    /**
     * @var boolean $isRequestGroup
     *
     * @ORM\Column(name="is_group_message", type="boolean", nullable=true)
     */
    private $isGroupMessage=false;

    /**
     * @var boolean $isRequestGroup
     *
     * @ORM\Column(name="is_request_group", type="boolean", nullable=true)
     */
    private $isRequestGroup;

    /**
     * @var boolean $isRequestGroup
     *
     * @ORM\Column(name="is_request_group_from_user", type="boolean", nullable=true)
     */
    private $isRequestGroupFromUser;
    
    
    /**
     * @var integer $groupId
     * @ORM\Column(name="group_id", type="integer", nullable=true)
     */
    private $groupId;
    
    /**
     * @var integer $agendaEventId
     * @ORM\Column(name="id_item", type="integer", nullable=true)
     */
    private $idItem;
    
    /**
     * @ORM\ManyToOne(targetEntity="MessageType")
     * @JoinColumn(name="message_type_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $messageType;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="sentPrivateMessages")
     * @JoinColumn(name="sender_userid",referencedColumnName="userid", onDelete="CASCADE",nullable=false)
     */
    private $sender;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="\CTRV\CommonBundle\Entity\User",inversedBy="receivedPrivateMessages")
     * @JoinColumn(name="receiver_public_key",referencedColumnName="public_key", onDelete="CASCADE")
     */
    private $receiver;
    
    /**
     * @var integer $groupId
     * @ORM\Column(name="type_item", type="string", length=255, nullable=true)
     */
    private $type_item;


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
     * @param string $date
     * @return PrivateMessage
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return PrivateMessage
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set senderStock
     *
     * @param boolean $senderStock
     * @return PrivateMessage
     */
    public function setSenderStock($senderStock)
    {
        $this->senderStock = $senderStock;
    
        return $this;
    }

    /**
     * Get senderStock
     *
     * @return boolean 
     */
    public function getSenderStock()
    {
        return $this->senderStock;
    }

    /**
     * Set receiverStock
     *
     * @param boolean $receiverStock
     * @return PrivateMessage
     */
    public function setReceiverStock($receiverStock)
    {
        $this->receiverStock = $receiverStock;
    
        return $this;
    }

    /**
     * Get receiverStock
     *
     * @return boolean 
     */
    public function getReceiverStock()
    {
        return $this->receiverStock;
    }

    /**
     * Set isDemand
     *
     * @param boolean $isDemand
     * @return PrivateMessage
     */
    public function setIsDemand($isDemand)
    {
        $this->isDemand = $isDemand;
    
        return $this;
    }

    /**
     * Get isDemand
     *
     * @return boolean 
     */
    public function getIsDemand()
    {
        return $this->isDemand;
    }

    /**
     * Set isRequestGroup
     *
     * @param boolean $isRequestGroup
     * @return PrivateMessage
     */
    public function setIsRequestGroup($isRequestGroup)
    {
        $this->isRequestGroup = $isRequestGroup;
    
        return $this;
    }

    /**
     * Get isRequestGroup
     *
     * @return boolean 
     */
    public function getIsRequestGroup()
    {
        return $this->isRequestGroup;
    }

    /**
     * Set isRequestGroupFromUser
     *
     * @param boolean $isRequestGroupFromUser
     * @return PrivateMessage
     */
    public function setIsRequestGroupFromUser($isRequestGroupFromUser)
    {
        $this->isRequestGroupFromUser = $isRequestGroupFromUser;
    
        return $this;
    }

    /**
     * Get isRequestGroupFromUser
     *
     * @return boolean 
     */
    public function getIsRequestGroupFromUser()
    {
        return $this->isRequestGroupFromUser;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return PrivateMessage
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    
        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set sender
     *
     * @param CTRV\CommonBundle\Entity\User $sender
     * @return PrivateMessage
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
     * @return PrivateMessage
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
     * Set isGroupMessage
     *
     * @param boolean $isGroupMessage
     * @return PrivateMessage
     */
    public function setIsGroupMessage($isGroupMessage)
    {
        $this->isGroupMessage = $isGroupMessage;
    
        return $this;
    }

    /**
     * Get isGroupMessage
     *
     * @return boolean 
     */
    public function getIsGroupMessage()
    {
        return $this->isGroupMessage;
    }

    /**
     * Set agendaEventId
     *
     * @param integer $agendaEventId
     * @return PrivateMessage
     */
    public function setAgendaEventId($agendaEventId)
    {
        $this->agendaEventId = $agendaEventId;
    
        return $this;
    }

    /**
     * Get agendaEventId
     *
     * @return integer 
     */
    public function getAgendaEventId()
    {
        return $this->agendaEventId;
    }

    /**
     * Set type_item
     *
     * @param string $typeItem
     * @return PrivateMessage
     */
    public function setTypeItem($typeItem)
    {
        $this->type_item = $typeItem;
    
        return $this;
    }

    /**
     * Get type_item
     *
     * @return string 
     */
    public function getTypeItem()
    {
        return $this->type_item;
    }

    /**
     * Set messageType
     *
     * @param CTRV\FlowBundle\Entity\MessageType $messageType
     * @return PrivateMessage
     */
    public function setMessageType(\CTRV\FlowBundle\Entity\MessageType $messageType = null)
    {
        $this->messageType = $messageType;
    
        return $this;
    }

    /**
     * Get messageType
     *
     * @return CTRV\FlowBundle\Entity\MessageType 
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Set idItem
     *
     * @param integer $idItem
     * @return PrivateMessage
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;
    
        return $this;
    }

    /**
     * Get idItem
     *
     * @return integer 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }
}