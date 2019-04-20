<?php

namespace CTRV\CommonBundle\Service;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

use Symfony\Component\Security\Core\Role\RoleInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTRV\CommonBundle\Entity\Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="CTRV\CommonBundle\Entity\RoleRepository")
 */
class MyPasswordEncoder implements PasswordEncoderInterface {
	
	public function encodePassword($raw, $salt) {
		return hash('sha1', $salt . $raw); // Custom function for encrypt
	}
	
	public function isPasswordValid($encoded, $raw, $salt) {
		return $encoded === $this->encodePassword($raw, $salt);
	}
	
}
