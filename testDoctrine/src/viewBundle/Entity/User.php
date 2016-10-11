<?php

namespace viewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="viewBundle\Repository\UserRepository")
 */
class User implements UserInterface, Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="string", length=255)
     */
    private $roles;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUser($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUser()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPass($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPass()
    {
        return $this->password;
    }

    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {

    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    public function unserialize($serialized) {
        list(
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized);
    }

    public function getSalt() {
        
    }

}

