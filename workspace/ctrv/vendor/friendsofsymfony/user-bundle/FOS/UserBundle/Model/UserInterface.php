<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Model;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface UserInterface extends AdvancedUserInterface, \Serializable
{
    const ROLE_DEFAULT = 'ROLE_USER';
    const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

    /**
     * Sets the username.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername($username);

    /**
     * Gets the canonical username in search and sort queries.
     *
     * @return string
     */
    public function getUsernameCanonical();

    /**
     * Sets the canonical username.
     *
     * @param string $usernameCanonical
     *
     * @return self
     */
    public function setUsernameCanonical($usernameCanonical);

    /**
     * Gets email.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Sets the email.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email);

    /**
     * Gets the canonical email in search and sort queries.
     *
     * @return string
     */
    public function getEmailCanonical();

    /**
     * Set the canonical email.
     *
     * @param string $emailCanonical
     *
     * @return self
     */
    public function setEmailCanonical($emailCanonical);

    /**
     * Gets the plain password.
     *
     * @return string
     */
    public function getPlainPassword();

    /**
     * Sets the plain password.
     *
     * @param string $password
     *
     * @return self
     */
    public function setPlainPassword($password);

    /**
     * Sets the hashed password.
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password);

    /**
     * Tells if the the given user has the super admin role.
     *
     * @return boolean
     */
    public function isSuperAdmin();

    /**
     * Tells if the the given user is this user.
     *
     * Useful when not hydrating all fields.
     *
     * @param null|UserInterface $user
     *
     * @return boolean
     */
    public function isUser(UserInterface $user = null);

    /**
     * @param boolean $boolean
     *
     * @return self
     */
    public function setEnabled($boolean);

    /**
     * Sets the locking status of the user.
     *
     * @param boolean $boolean
     *
     * @return self
     */
    public function setLocked($boolean);

    /**
     * Sets the super admin status
     *
     * @param boolean $boolean
     *
     * @return self
     */
    public function setSuperAdmin($boolean);

    /**
     * Gets the confirmation token.
     *
     * @return string
     */
    public function getConfirmationToken();

    /**
     * Sets the confirmation token
     *
     * @param string $confirmationToken
     *
     * @return self
     */
    public function setConfirmationToken($confirmationToken);

    /**
     * Sets the timestamp that the user requested a password reset.
     *
     * @param null|\DateTime $date
     *
     * @return self
     */
    public function setPasswordRequestedAt(\DateTime $date = null);

    /**
     * Checks whether the password reset request has expired.
     *
     * @param integer $ttl Requests older than this many seconds will be considered expired
     *
     * @return boolean true if the user's password request is non expired, false otherwise
     */
    public function isPasswordRequestNonExpired($ttl);

    /**
     * Sets the last login time
     *
     * @param \DateTime $time
     *
     * @return self
     */
    public function setLastLogin(\DateTime $time = null);

    /**
     * Never use this to check if this user has access to anything!
     *
     * Use the SecurityContext, or an implementation of AccessDecisionManager
     * instead, e.g.
     *
     *         $securityContext->isGranted('ROLE_USER');
     *
     * @param string $role
     *
     * @return boolean
     */
    public function hasRole($role);

    /**
     * Sets the roles of the user.
     *
     * This overwrites any previous roles.
     *
     * @param array $roles
     *
     * @return self
     */
    public function setRoles(array $roles);

    /**
     * Adds a role to the user.
     *
     * @param string $role
     *
     * @return self
     */
    public function addRole($role);

    /**
     * Removes a role to the user.
     *
     * @param string $role
     *
     * @return self
     */
    public function removeRole($role);
}
