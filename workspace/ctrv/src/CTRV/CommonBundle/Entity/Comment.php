<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping\DiscriminatorMap;

use Doctrine\ORM\Mapping\DiscriminatorColumn;

use Doctrine\ORM\Mapping\InheritanceType;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\CommentRepository")
 */
class Comment
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="comment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $userid
     * @ORM\ManyToOne(targetEntity="User",inversedBy="comments")
     * @JoinColumn(name="userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $auteur;

    /**
     * @var string $content
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;
    
    /**
     * @var string $typeEntity
     *
     * @ORM\Column(name="type_entity", type="string", length=255, nullable=true)
     */
    private $typeEntity;
    
    /**
     * @var string $idEntity
     *
     * @ORM\Column(name="id_entity", type="integer",nullable=true)
     */
    private $idEntity;
   

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
     * Set content
     *
     * @param string $content
     * @return Comment
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
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
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
     * Set auteur
     *
     * @param CTRV\CommonBundle\Entity\User $auteur
     * @return Comment
     */
    public function setAuteur(\CTRV\CommonBundle\Entity\User $auteur = null)
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

    /**
     * Set typeEntity
     *
     * @param string $typeEntity
     * @return Comment
     */
    public function setTypeEntity($typeEntity)
    {
        $this->typeEntity = $typeEntity;
    
        return $this;
    }

    /**
     * Get typeEntity
     *
     * @return string 
     */
    public function getTypeEntity()
    {
        return $this->typeEntity;
    }

    /**
     * Set idEntity
     *
     * @param integer $idEntity
     * @return Comment
     */
    public function setIdEntity($idEntity)
    {
        $this->idEntity = $idEntity;
    
        return $this;
    }

    /**
     * Get idEntity
     *
     * @return integer 
     */
    public function getIdEntity()
    {
        return $this->idEntity;
    }
}