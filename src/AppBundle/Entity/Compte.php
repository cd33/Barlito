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
     * @ORM\Column(name="numero", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    protected $libelle;

    /**
    * @var User
    *
    * @ORM\ManyToOne(targetEntity="Client", inversedBy="compte")
    * @ORM\JoinColumn(name="client_id",referencedColumnName="client_id")
    */
    protected $client;

    /**
    * @var User
    *
    * @ORM\OneToMany(targetEntity="Transaction", mappedBy="compte", cascade={"persist", "remove"})
    */
    protected $transaction;

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Compte
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Compte
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    public function __toString(){
        return $this->getNumero()." ".$this->getLibelle();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->transaction = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add transaction
     *
     * @param \AppBundle\Entity\Transaction $transaction
     *
     * @return Compte
     */
    public function addTransaction(\AppBundle\Entity\Transaction $transaction)
    {
        $this->transaction[] = $transaction;

        return $this;
    }

    /**
     * Remove transaction
     *
     * @param \AppBundle\Entity\Transaction $transaction
     */
    public function removeTransaction(\AppBundle\Entity\Transaction $transaction)
    {
        $this->transaction->removeElement($transaction);
    }

    /**
     * Get transaction
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
