<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\ImageEntity
 *
 * @ORM\Table(name="image_entity")
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\ImageEntityRepository")
 */
class ImageEntity
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
     * @var integer $idEntity
     *
     * @ORM\Column(name="id_item", type="integer")
     */
    private $idItem;

    /**
     * @var string $typeEntity
     *
     * @ORM\Column(name="type_item", type="string", length=255)
     */
    private $typeItem;

    /**
     * @var string $imgPath
     *
     * @ORM\Column(name="img_path", type="string", length=255)
     */
    private $imgPath;

    /**
     * @var string $author
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var \DateTime $addedDate
     *
     * @ORM\Column(name="added_date", type="datetime")
     */
    private $addedDate;


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
     * Set idEntity
     *
     * @param integer $idEntity
     * @return ImageEntity
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

    /**
     * Set typeEntity
     *
     * @param string $typeEntity
     * @return ImageEntity
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
     * Set imgPath
     *
     * @param string $imgPath
     * @return ImageEntity
     */
    public function setImgPath($imgPath)
    {
        $this->imgPath = $imgPath;
    
        return $this;
    }

    /**
     * Get imgPath
     *
     * @return string 
     */
    public function getImgPath()
    {
        return $this->imgPath;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return ImageEntity
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set addedDate
     *
     * @param \DateTime $addedDate
     * @return ImageEntity
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;
    
        return $this;
    }

    /**
     * Get addedDate
     *
     * @return \DateTime 
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set idItem
     *
     * @param integer $idItem
     * @return ImageEntity
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

    /**
     * Set typeItem
     *
     * @param string $typeItem
     * @return ImageEntity
     */
    public function setTypeItem($typeItem)
    {
        $this->typeItem = $typeItem;
    
        return $this;
    }

    /**
     * Get typeItem
     *
     * @return string 
     */
    public function getTypeItem()
    {
        return $this->typeItem;
    }
}