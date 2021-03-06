<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;

/**
 * Client
 * 
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $client_id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    protected $prenom;

    /**
    * @var User
    *
    *   @ORM\OneToOne(targetEntity="User")
    *   @ORM\JoinColumn(name="user_id",referencedColumnName="id")
    */
    protected $user;

    /**
    * @var User
    *
    * @ORM\OneToMany(targetEntity="Compte", mappedBy="client", cascade={"persist", "remove"})
    */
    protected $compte;

    /**
     * Get transacId
     *
     * @return integer
     */
    public function getclient_id()
    {
        return $this->client_id;
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Client
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->compte = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add compte
     *
     * @param \AppBundle\Entity\Compte $compte
     *
     * @return Client
     */
    public function addCompte(\AppBundle\Entity\Compte $compte)
    {
        $this->compte[] = $compte;

        return $this;
    }

    /**
     * Remove compte
     *
     * @param \AppBundle\Entity\Compte $compte
     */
    public function removeCompte(\AppBundle\Entity\Compte $compte)
    {
        $this->compte->removeElement($compte);
    }

    /**
     * Get compte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompte()
    {
        return $this->compte;
    }

    public function __toString(){
        return $this->getPrenom()." ".$this->getNom();
    }

    /**
     * Get clientId
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->client_id;
    }
}
