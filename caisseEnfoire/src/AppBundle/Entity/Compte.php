<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompteRepository")
 */
class Compte
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
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="solde", type="string", length=255)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="decouvert", type="string", length=255)
     */
    private $decouvert;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="FK_client", referencedColumnName="id")
     */
    private $client;


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
     * Set numero
     *
     * @param string $numero
     *
     * @return Compte
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set solde
     *
     * @param string $solde
     *
     * @return Compte
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return string
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set decouvert
     *
     * @param string $decouvert
     *
     * @return Compte
     */
    public function setDecouvert($decouvert)
    {
        $this->decouvert = $decouvert;

        return $this;
    }

    /**
     * Get decouvert
     *
     * @return string
     */
    public function getDecouvert()
    {
        return $this->decouvert;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Compte
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }
}

