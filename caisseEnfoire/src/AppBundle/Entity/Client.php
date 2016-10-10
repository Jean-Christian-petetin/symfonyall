<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client implements UserInterface, \Serializable
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="listeCompte", type="string", length=255)
     */
    private $listeCompte;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Client
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set listeCompte
     *
     * @param string $listeCompte
     *
     * @return Client
     */
    public function setListeCompte($listeCompte)
    {
        $this->listeCompte = $listeCompte;

        return $this;
    }

    /**
     * Get listeCompte
     *
     * @return string
     */
    public function getListeCompte()
    {
        return $this->listeCompte;
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->mdp;
    }

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getSalt() {
        
    }

    public function getUsername() {
        return $this->nom;
    }

    public function serialize() {
       return serialize(array(
           $this->id,
           $this->nom,
           $this->mdp
       ));
   }    public function unserialize($serialized) {
       list(
               $this->id,
               $this->nom,
               $this->mdp
               ) = unserialize($serialized);
   }

}

