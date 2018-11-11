<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheIntervention
 *
 * @ORM\Table(name="fiche_intervention")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\FicheInterventionRepository")
 */
class FicheIntervention
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
     * @var int
     *
     * @ORM\Column(name="IdUser", type="integer")
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="IdDomaine", type="integer")
     */
    private $idDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="Probleme", type="text")
     */
    private $probleme;

     /**
     * @var string
     *
     * @ORM\Column(name="Habitation", type="text")
     */
    private $habitation;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return FicheIntervention
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idDomaine
     *
     * @param integer $idDomaine
     *
     * @return FicheIntervention
     */
    public function setIdDomaine($idDomaine)
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }

    /**
     * Get idDomaine
     *
     * @return int
     */
    public function getIdDomaine()
    {
        return $this->idDomaine;
    }

    /**
     * Set probleme
     *
     * @param string $probleme
     *
     * @return FicheIntervention
     */
    public function setProbleme($probleme)
    {
        $this->probleme = $probleme;

        return $this;
    }

    /**
     * Get probleme
     *
     * @return string
     */
    public function getProbleme()
    {
        return $this->probleme;
    }

    /**
     * Set habitation
     *
     * @param string $habitation
     *
     * @return FicheIntervention
     */
    public function setHabitation($habitation)
    {
        $this->habitation = $habitation;

        return $this;
    }

    /**
     * Get habitation
     *
     * @return string
     */
    public function getHabitation()
    {
        return $this->habitation;
    }
}
