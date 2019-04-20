<?php

namespace CTRV\FlowBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\FlowBundle\Entity\MessageType
 *
 * @ORM\Table(name="message_type")
 * @ORM\Entity(repositoryClass="CTRV\FlowBundle\Entity\MessageTypeRepository")
 */
class MessageType
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
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=256, nullable=true)
     */
    private $label;
    

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
     * @return MessageType
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
}