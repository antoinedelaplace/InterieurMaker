<?php

namespace PlanningBundle\Repository;
//use Symfony\Component\Validator\Constraints\DateTime;

/**
 * PlanningRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlanningRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     *
     * Return User's Planning for one Day
     *
     * @param $user (With FOS)
     * @param $date format Day's Datetime with hour at midnight
     * @return array|null
     */

    public function getPlanningUserDay($user, $date)
    {        
	$endDate = clone $date;
	$endDate->modify('+1 day');
        $planning = $this->_em->createQuery('SELECT p.heureDebut, f.idDomaine, f.id
        FROM PlanningBundle:Planning p, PlanningBundle:FicheIntervention f
        WHERE p.idFiche = f.id AND f.idUser = :user AND p.heureDebut BETWEEN :startDate AND :endDate'
        )->setParameters(array(
            'user' => $user,
            'startDate' => $date,
            'endDate' => $endDate
        ))->getResult();
	if (empty($planning))
            return NULL;
        else
            return $planning;
    }

    /**
     *
     * Return User's Planning for one Week
     *
     * @param $user (With FOS)
     * @param $date format Monday's Datetime with hour at midnight
     * @return array|null
     */
    public function getPlanningUserWeek($user, $date)
    {
        $planningWeekly = array();
        for($i = 0; $i < 5; $i++)
        {
            if (($planningDay = $this->getPlanningUserDay($user, $date)) != NULL)
	        array_push($planningWeekly, $planningDay);
	        $date->modify('+1 day');
        }
        if (empty($planningWeekly))
            return NULL;
        else
            return $planningWeekly;
    }

    /**
     *
     * Return Domain's Planning for one Day
     *
     * @param $domain
     * @param $date
     * @return array|null
     */
    public function getPlanningDomainDay($domain, $date)
    {
        $endDate = clone $date;
        $endDate->modify('+1 day');
        $planning = $this->_em->createQuery('SELECT p.heureDebut
        FROM PlanningBundle:Planning p, PlanningBundle:FicheIntervention f
        WHERE f.id = p.idFiche AND f.idDomaine = :domain AND p.heureDebut BETWEEN :startDate AND :endDate')
            ->setParameters(array(
                'domain' => $domain,
                'startDate' => $date,
                'endDate' => $endDate
            ))->getResult();
        if (empty($planning))
            return NULL;
        else
            return $planning;
    }

    /**
     *
     * Return Domain's Planning for one Week
     *
     * @param $domain
     * @param $date
     * @return array|null
     */

    public function getPlanningDomainWeek($domain, $date)
    {
        $planningWeekly = array();
        for($i = 0; $i < 5; $i++)
        {
            if (($planningDay = $this->getPlanningDomainDay($domain, $date)) != NULL)
                array_push($planningWeekly, $planningDay);
            $date->modify('+1 day');
            //$date->add(new DateTime('P1D'));
        }
        if (empty($planningWeekly))
            return NULL;
        else
            return $planningWeekly;
    }



}