<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\PlanningRepository")
 */
class Planning
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
     * @var \DateTime
     *
     * @ORM\Column(name="HeureDebut", type="datetime")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HeureFin", type="datetime")
     */
    private $heureFin;

    /**
     * @var int
     *
     * @ORM\Column(name="IdAgent", type="integer")
     */
    private $idAgent;

    /**
     * @var int
     *
     * @ORM\Column(name="IdFiche", type="integer")
     */
    private $idFiche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HeureSaisie", type="datetime")
     */
    private $heureSaisie;

    /**
     * @var bool
     *
     * @ORM\Column(name="Validation", type="boolean")
     */
    private $validation;


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
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Planning
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Planning
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set idAgent
     *
     * @param integer $idAgent
     *
     * @return Planning
     */
    public function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;

        return $this;
    }

    /**
     * Get idAgent
     *
     * @return int
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set idFiche
     *
     * @param integer $idFiche
     *
     * @return Planning
     */
    public function setIdFiche($idFiche)
    {
        $this->idFiche = $idFiche;

        return $this;
    }

    /**
     * Get idFiche
     *
     * @return int
     */
    public function getIdFiche()
    {
        return $this->idFiche;
    }

    /**
     * Set heureSaisie
     *
     * @param \DateTime $heureSaisie
     *
     * @return Planning
     */
    public function setHeureSaisie($heureSaisie)
    {
        $this->heureSaisie = $heureSaisie;

        return $this;
    }

    /**
     * Get heureSaisie
     *
     * @return \DateTime
     */
    public function getHeureSaisie()
    {
        return $this->heureSaisie;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     *
     * @return Planning
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return bool
     */
    public function getValidation()
    {
        return $this->validation;
    }
}

