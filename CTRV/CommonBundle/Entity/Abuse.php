<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CTRV\CommonBundle\Entity\Abuse
 *
 * @ORM\Table(name="abuse")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\AbuseRepository")
 */
class Abuse
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
     * @var string $entityType
     *
     * @ORM\Column(name="entity_type", type="string", length=255)
     */
    private $entityType;
    
    /**
     * @var integer $entityId
     *
     * @ORM\Column(name="entity_id", type="integer")
     */
    private $entityId;
    
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="owner_userid",referencedColumnName="userid", onDelete="CASCADE")
     */
    private $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
