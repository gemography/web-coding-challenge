<?php

namespace CTRV\CommonBundle\Entity;
use Symfony\Component\Security\Core\Role\RoleInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\RoleRepository")
 */
class Role implements RoleInterface {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected  $id;

	/**
	 * @var string $name
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	protected  $name;

	public function __toString() {
		return $this->name;
	}
	
// **
// 	 * @ORM\OneToMany(targetEntity="User",mappedBy="role")
// 	 * @var unknown_type
// 	 */
// 	protected   $users;
	
	
	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Role
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string 
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * 
	 */
	public function getRole() {
		return $this->name;

	}

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add users
     *
     * @param CTRV\CommonBundle\Entity\User $users
     * @return Role
     */
    public function addUser(\CTRV\CommonBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param CTRV\CommonBundle\Entity\User $users
     */
    public function removeUser(\CTRV\CommonBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}