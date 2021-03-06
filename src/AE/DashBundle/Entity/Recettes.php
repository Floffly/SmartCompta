<?php

namespace AE\DashBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * @ORM\Entity()
 */

class Recettes
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AE\platformBundle\Entity\Entreprise")
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */

    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */

    private $modeDePaiement;


    /**
     * @ORM\Column(type="float")
     */

    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */

    private $client;

    /**
     * @ORM\Column(type="date")
     */

    private $date;


    /**
     * @ORM\Column(type="string")
     */

    private $justificatif;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Recettes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Recettes
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return Recettes
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

    /**
     * Set modeDePaiement
     *
     * @param string $modeDePaiement
     * @return Recettes
     */
    public function setModeDePaiement($modeDePaiement)
    {
        $this->modeDePaiement = $modeDePaiement;

        return $this;
    }

    /**
     * Set entreprise
     *
     * @param \AE\platformBundle\Entity\Entreprise $entreprise
     * @return Recettes
     */
    public function setEntreprise(\AE\platformBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \AE\platformBundle\Entity\Entreprise 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Get modeDePaiement
     *
     * @return string 
     */
    public function getModeDePaiement()
    {
        return $this->modeDePaiement;
    }


    /**
     * Set justificatif
     *
     * @param string $justificatif
     * @return Recettes
     */
    public function setJustificatif($justificatif = null)
    {
        $this->justificatif = $justificatif;

        return $this;
    }

    /**
     * Get justificatif
     *
     * @return string 
     */
    public function getJustificatif()
    {
        return $this->justificatif;
    }
}
