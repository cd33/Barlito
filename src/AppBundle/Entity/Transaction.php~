<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="transac_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $transac_id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    protected $libelle;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateof", type="date", length=255)
     */
    protected $dateof;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montant", type="decimal", length=255)
     */
    protected $montant;


    /**
     * Get transacId
     *
     * @return integer
     */
    public function getTransacId()
    {
        return $this->transac_id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Transaction
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
     * Set dateof
     *
     * @param \DateTime $dateof
     *
     * @return Transaction
     */
    public function setDateof($dateof)
    {
        $this->dateof = $dateof;

        return $this;
    }

    /**
     * Get dateof
     *
     * @return \DateTime
     */
    public function getDateof()
    {
        return $this->dateof;
    }

    /**
     * Set montant
     *
     * @param decimal $montant
     *
     * @return Transaction
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return decimal
     */
    public function getMontant()
    {
        return $this->montant;
    }
}
