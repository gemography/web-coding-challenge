<?php

namespace CTRV\MailBundle\Entity;

use Doctrine\ORM\Mapping\UniqueConstraint;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\MailBundle\Entity\MailTemplate
 *
 * @ORM\Table(name="mail_template")
 * @ORM\Entity(repositoryClass="CTRV\MailBundle\Entity\MailTemplateRepository")
 * //@UniqueEntity(fields="mailType", message="mailTemplate.addEdit.form.mail_type_already_exist")
 */
class MailTemplate
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
     * @var string $sender
     *
     * @ORM\Column(name="sender", type="string", length=255, nullable=true)
     */
    private $sender;

    /**
     * @var string $subject
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string $content
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="MailType")
     * @JoinColumn(name="mail_type_id", referencedColumnName="id")
     * @var unknown_type
     */
    private $mailType;

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
     * Set sender
     *
     * @param string $sender
     * @return MailTemplate
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    
        return $this;
    }

    /**
     * Get sender
     *
     * @return string 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param string $receiver
     * @return MailTemplate
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    
        return $this;
    }

    /**
     * Get receiver
     *
     * @return string 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return MailTemplate
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return MailTemplate
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
     * Set mailType
     *
     * @param CTRV\MailBundle\Entity\MailType $mailType
     * @return MailTemplate
     */
    public function setMailType(\CTRV\MailBundle\Entity\MailType $mailType = null)
    {
        $this->mailType = $mailType;
    
        return $this;
    }

    /**
     * Get mailType
     *
     * @return CTRV\MailBundle\Entity\MailType 
     */
    public function getMailType()
    {
        return $this->mailType;
    }
}