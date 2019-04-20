<?php

namespace CTRV\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\ConnectedUsers
 *
 * @ORM\Table(name="connected_users")
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\ConnectedUsersRepository")
 */
class ConnectedUsers
{
    /**
     * @var string $userid
     *
     * @ORM\Column(name="userid", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return ConnectedUsers
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}