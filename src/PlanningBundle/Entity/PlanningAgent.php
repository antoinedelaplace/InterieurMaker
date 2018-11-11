<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningAgent
 *
 * @ORM\Table(name="planning_agent")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\PlanningAgentRepository")
 */
class PlanningAgent
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
     * @ORM\Column(name="idAgent", type="integer")
     */
    private $idAgent;

    /**
     * @var int
     *
     * @ORM\Column(name="idDomaine", type="integer")
     */
    private $idDomaine;


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
     * Set idAgent
     *
     * @param integer $idAgent
     *
     * @return PlanningAgent
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
     * Set idDomaine
     *
     * @param integer $idDomaine
     *
     * @return PlanningAgent
     */
    public function setIdDomaine($idDomaine)
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }

    /**
     * Get idDomaine
     *
     * @return integer
     */
    public function getIdDomaine()
    {
        return $this->idDomaine;
    }
}
