<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CTRV\CommonBundle\Entity\Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\NoteRepository")
 */
class Note
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
     * @var integer $note
     *
     * @ORM\Column(name="note", type="integer",nullable=false)
     */
    private $note;
    
    /**
     * @var string $userid
     * @ORM\ManyToOne(targetEntity="User",inversedBy="comments")
     * @JoinColumn(name="userid",referencedColumnName="userid", onDelete="CASCADE",nullable=false)
     */
    private $auteur;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=false)
     */
    private $type;

    /**
     * @var integer $id_entite
     *
     * @ORM\Column(name="id_entite", type="integer",nullable=false)
     */
    private $id_entite;


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
     * Set note
     *
     * @param integer $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Note
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set id_entite
     *
     * @param integer $idEntite
     * @return Note
     */
    public function setIdEntite($idEntite)
    {
        $this->id_entite = $idEntite;
    
        return $this;
    }

    /**
     * Get id_entite
     *
     * @return integer 
     */
    public function getIdEntite()
    {
        return $this->id_entite;
    }

    /**
     * Set auteur
     *
     * @param CTRV\CommonBundle\Entity\User $auteur
     * @return Note
     */
    public function setAuteur(\CTRV\CommonBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return CTRV\CommonBundle\Entity\User 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}