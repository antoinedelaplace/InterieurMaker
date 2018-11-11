<?php

namespace PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PlanningBundle\Entity\Planning;
use PlanningBundle\Entity\Agent;
use PlanningBundle\Entity\Domaine;
use PlanningBundle\Entity\FicheIntervention;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model;

class ReservationController extends Controller
{
    public function getPlanningJourDescribe(Request $request) {
        $post = $request->request;
        $date = $post->get('dateTime');
        $date = new \Datetime($date);
        $actualMonth = $this->tradMonth($date->format('F')) . " " . $date->format('Y');
        $startActualWeek = $this->startDateWeek($date);
        for ($i = 0; $i < 5; $i++){
            $day = $startActualWeek->format('l');
            $day = $this->tradDay($day);
            $trad = $day . ' ' . $startActualWeek->format('d');
            $days[$i] = $trad;
            $startActualWeek->modify('+1 day');
        }
        $date->modify('-5 day');
        return[$actualMonth => $days];
    }


    /** open view to display available reservations
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function getPlanningResaFreeAction(Request $request){
        $get = $request->query;
        $heure_debut = $get->get('datetime');
        $domaine = $get->get('domain');
        $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:Domaine");
        $id_domaine = $repository->findByNom($domaine);
        $actualDate = new \Datetime($heure_debut);
        $actualMonth = $this->tradMonth($actualDate->format('F')) . " " . $actualDate->format('Y');
        $startActualWeek = $this->startDateWeek($actualDate);
        $date = $startActualWeek;
        for ($i = 0; $i < 5; $i++){
            $day = $startActualWeek->format('l');
            $day = $this->tradDay($day);
            $trad = $day . ' ' . $startActualWeek->format('d');
            $anneemonth = $date->format('Y-m');
            $index = $anneemonth . '-' . $startActualWeek->format('d');
            $days[$index] = $trad;
            $startActualWeek->modify('+1 day');
        }
        $date->modify('-5 day');

        $agents = array();
        $repository = $this->getDoctrine()->getManager()->getRepository("UserBundle:User");
        $users = $repository->findAll();
        foreach ($users as $agent){
            foreach ($agent->getRoles() as $role){
                if ($role == 'ROLE_AGENT'){
                    $agents[] = $agent->getId();
                    continue;
                }
            }
        }
        $agents = $this->getAgentDomaine($agents, $id_domaine);

        $domaine_dispo = $this->getCreneauDispoWeek($agents, $date);
        $domaine_dispo = $this->supp_date_before($domaine_dispo, $date);
        $domaine_dispo = $this->supp_creneau_use($this->getUser()->getId(), $domaine_dispo, $date);

        $reponse = new Response(json_encode($domaine_dispo));
        return $reponse;
    }


    /**
     *
     * Obtain Agents for one domain
     *
     * @param $agents Array of Id Agent
     * @param $id_domaine
     * @return array
     */
    public function getAgentDomaine($agents, $id_domaine){
        $agent_save = array();
        $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:PlanningAgent");
        foreach ($agents as $id_agent){
            if ($repository->hasDomaine($id_domaine, $id_agent))
                $agent_save[] = $id_agent;
        }
        return $agent_save;
    }


    /**
     *
     * Obtain Disponibility Agent for a week
     *
     * @param $agents
     * @param $date
     * @return mixed
     */
    public function getCreneauDispoWeek($agents, $date){
        $date_tmp = clone($date);
        $args = $this->init_planning_resa();
        return $this->modify_tab(2, $args, $date, $agents);
    }

    /**
     *
     * Delete Possibility to add rdv before the actual date
     *
     * @param $args
     * @param $date
     * @return mixed
     */
    public function supp_date_before($args, $date){
        $date_actuel = new \Datetime();
        return $this->modify_tab(1, $args, $date, NULL, $date_actuel);
    }


    /**
     *
     * Delete Possibility to add rdv if the user have a rdv
     *
     * @param $id_user
     * @param $args
     * @param $date
     * @return mixed
     */
    public function supp_creneau_use($id_user, $args, $date)
    {
        //TODO : Virée les plannings que $id_user à déjà pris
        //return $this->modify_tab(3, $args, $date, NULL, NULL, $id_user);
        //}
        $date_tmp = clone($date);
        $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:Planning");
        $planning = $repository->getPlanningUserWeek($this->getUser()->getId(), $date_tmp);
	if ($planning != NULL){
        foreach ($args as $index_heure => $heure){
            $heure_ajouter = substr($index_heure, 0, -1);
            foreach ($heure as $index_creneau => $tab_creneau){
                switch ($index_creneau){
                    case (1):
                        $minute_ajouter = 20;
                        break;
                    case (2):
                        $minute_ajouter = 40;
                        break;
                    default:
                        $minute_ajouter = 0;
                        break;
                }
                foreach ($tab_creneau as $index_jour => $heure){
                    $date_tmp = clone($date);
                    if ($index_jour != 0)
                        $date_tmp->modify("+$index_jour day");
                    if ($minute_ajouter != 0)
                        $date_tmp->modify("+$minute_ajouter minutes");
                    if ($heure_ajouter != 0)
                        $date_tmp->modify("+$heure_ajouter hour");
                    foreach ($planning[0] as $plann){
                        if ($plann["heureDebut"] == $date_tmp)
                            $args[$index_heure][$index_creneau][$index_jour] = 0;
                    }
                }
            }
        }
	}
        return $args;
    }


    /**
     *
     * Généric function from supp_date_before and getCreneauDispoWeek
     *
     * @param $idFonction
     * @param $args
     * @param $date
     * @param null $agents
     * @param null $date_actuel
     * @param null $idUser
     * @return mixed
     */
    public function modify_tab($idFonction, $args, $dateenvoi, $agents = NULL, $date_actuel = NULL, $idUser = NULL)
    {
	$date = clone $dateenvoi;
        $repo_planning = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:PlanningAgent");
        $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:Planning");
        $planning = $repository->getPlanningUserWeek($idUser, $date);
	$date->modify('-5 day');
        foreach ($args as $index_heure => $heure) {
            $heure_ajouter = substr($index_heure, 0, -1);
            foreach ($heure as $index_creneau => $tab_creneau) {
                switch ($index_creneau) {
                    case (1):
                        $minute_ajouter = 20;
                        break;
                    case (2):
                        $minute_ajouter = 40;
                        break;
                    default:
                        $minute_ajouter = 0;
                        break;
                }
                foreach ($tab_creneau as $index_jour => $heure) {
                    $date_tmp = clone($date);
                    if ($index_jour != 0)
                        $date_tmp->modify("+$index_jour day");
                    if ($minute_ajouter != 0)
                        $date_tmp->modify("+$minute_ajouter minutes");
                    if ($heure_ajouter != 0)
                        $date_tmp->modify("+$heure_ajouter hour");
                    switch ($idFonction)
                    {
                        case (1):
                            if ($date_tmp < $date_actuel)
                                $args[$index_heure][$index_creneau][$index_jour] = 0;
                            break;
                        case (2):
                            $dispo = 0;
                            foreach ($agents as $agent)
                            {
                                if ($repo_planning->isDispo($agent, $date_tmp))
                                    $dispo = 1;
                            }
                            if ($dispo == 0)
                                $args[$index_heure][$index_creneau][$index_jour] = 0;
                            break;
                        case (3):
                            foreach ($planning[0] as $plann){
                                if ($plann["heureDebut"] == $date_tmp)
                                    $args[$index_heure][$index_creneau][$index_jour] = 0;
                            }
                            break;
                    }
                }
            }
        }
        return $args;
    }

    /**
     *
     * Initialisation planning reservation for a week
     *
     * @return array
     */
    public function init_planning_resa(){
        $planning = array();
        $planning["8h"] = [["8h-8h15","8h-8h15","8h-8h15","8h-8h15","8h-8h15"],["8h20-8h35","8h20-8h35","8h20-8h35","8h20-8h35","8h20-8h35"],["8h40-8h55","8h40-8h55","8h40-8h55","8h40-8h55","8h40-8h55"]];
        $planning["9h"] = [["9h-9h15","9h-9h15","9h-9h15","9h-9h15","9h-9h15"],["9h20-9h35","9h20-9h35","9h20-9h35","9h20-9h35","9h20-9h35"],["9h40-9h55","9h40-9h55","9h40-9h55","9h40-9h55","9h40-9h55"]];
        $planning["10h"] = [["10h-10h15","10h-10h15","10h-10h15","10h-10h15","10h-10h15"],["10h20-10h35","10h20-10h35","10h20-10h35","10h20-10h35","10h20-10h35"],["10h40-10h55","10h40-10h55","10h40-10h55","10h40-10h55","10h40-10h55"]];
        $planning["11h"] = [["11h-11h15","11h-11h15","11h-11h15","11h-11h15","11h-11h15"],["11h20-11h35","11h20-11h35","11h20-11h35","11h20-11h35","11h20-11h35"],["11h40-11h55","11h40-11h55","11h40-11h55","11h40-11h55","11h40-11h55"]];
        $planning["14h"] = [["14h-14h15","14h-14h15","14h-14h15","14h-14h15","14h-14h15"],["14h20-14h35","14h20-14h35","14h20-14h35","14h20-14h35","14h20-14h35"],["14h40-14h55","14h40-14h55","14h40-14h55","14h40-14h55","14h40-14h55"]];
        $planning["15h"] = [["15h-15h15","15h-15h15","15h-15h15","15h-15h15","15h-15h15"],["15h20-15h35","15h20-15h35","15h20-15h35","15h20-15h35","15h20-15h35"],["15h40-15h55","15h40-15h55","15h40-15h55","15h40-15h55","15h40-15h55"]];
        $planning["16h"] = [["16h-16h15","16h-16h15","16h-16h15","16h-16h15","16h-16h15"],["16h20-16h35","16h20-16h35","16h20-16h35","16h20-16h35","16h20-16h35"],["16h40-16h55","16h40-16h55","16h40-16h55","16h40-16h55","16h40-16h55"]];
        $planning["17h"] = [["17h-17h15","17h-17h15","17h-17h15","17h-17h15","17h-17h15"],["17h20-17h35","17h20-17h35","17h20-17h35","17h20-17h35","17h20-17h35"],["17h40-17h55","17h40-17h55","17h40-17h55","17h40-17h55","17h40-17h55"]];
        return $planning;
    }

    public function transform_resa($planning, $args, $datebegin)
    {
        foreach($planning as $jour){
            foreach($jour as $plann){
                $date = $plann["heureDebut"];
                $dateatraiter = $date->format('Y-m-d H:i');
                $date = explode(" ", $dateatraiter);
                $datejour = $date[0];
                $heureminutes = $date[1];
                $datejour = explode("-", $datejour);
                $annee = $datejour[0];
                $mois = (int)$datejour[1];
                $jour = (int)$datejour[2];
                $heureminutes = explode(':', $heureminutes);
                $heure = (int)$heureminutes[0];
                $minutes  = (int)$heureminutes[1];
                $jourbegin = (int)$datebegin->format('d');
                $jourchoisi = $jour - $jourbegin;
                if($minutes == 0)
                    $index = 0;
                elseif($minutes == 20)
                    $index = 1;
                else
                    $index = 2;
                $args[$heure.'h'][$index][$jourchoisi] = 0;
            }
        }
        return $args;
    }

    public function newReservationAction($Date, $domain)
    {
        $actualDate = ($Date != "") ? new \Datetime($Date) : new \Datetime();
        $actualMonth = $this->tradMonth($actualDate->format('F')) . " " . $actualDate->format('Y');
        $startActualWeek = $this->startDateWeek($actualDate);
        $date = $startActualWeek;
        $date_before = clone $date;
        $date_after = clone $date;
        $date_before->modify('-7 day');
        $date_after->modify('+7 day');
        for ($i = 0; $i < 5; $i++){
            $day = $startActualWeek->format('l');
            $day = $this->tradDay($day);
            $trad = $day . ' ' . $startActualWeek->format('d');
            $anneemonth = $date->format('Y-m');
            $index = $anneemonth . '-' . $startActualWeek->format('d');
            $days[$index] = $trad;
            $startActualWeek->modify('+1 day');
        }
        $date->modify('-5 day');
        $date->modify('-5 day');
        $args = $this->init_planning_resa();
        return $this->render('PlanningBundle:Reservation:new_reservation.html.twig', array(
            'days' => $days,
            'reservations' => $args,
            'actualmonth' => $actualMonth,
            'afterDate' => $date_after->format('Y-m-d H:i:s'),
            'beforeDate' => $date_before->format('Y-m-d H:i:s'),
            'domain' => $domain
        ));
    }

    public function selectAgent($dateDebut, $id_domaine){
        $repository = $this->getDoctrine()->getManager()->getRepository("UserBundle:User");
        $repo_agent = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:PlanningAgent");
        $users = $repository->findAll();
        foreach ($users as $agent){
            foreach ($agent->getRoles() as $role){
                if ($role == 'ROLE_AGENT'){
                    $agents[] = $agent->getId();
                }
            }
        }
        $agents = $this->getAgentDomaine($agents, $id_domaine);
        foreach ($agents as $id_agent){
            if ($repo_agent->isDispo($id_agent, $dateDebut))
                return $id_agent;
        }
        return -1;
    }

    public function saveReservationAction(Request $request)
    {
        try {
            $get = $request->query;
            $date = $get->get('datetime');
            $domaine = $get->get('domain');
            $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:Domaine");
            $id_domaine = $repository->findByNom($domaine);
            $em = $this->getDoctrine()->getManager();
            $dateDebut = new \Datetime($date);
            $dateFin = new \Datetime($date);
            $dateFin->modify('+15 minute');
            $agent = $this->selectAgent($dateDebut, $id_domaine);
            if ($agent == -1){
                $response = new Response();
                $response->setStatusCode(409);
                return $response;
            }
            $fiche = new FicheIntervention();
            $fiche->setIdUser($this->getUser()->getId());
            $fiche->setIdDomaine($id_domaine[0]['id']);
            $fiche->setProbleme("");
            $fiche->setHabitation("");
            $em->persist($fiche);
            $em->flush();
            $planning = new Planning();
            $planning->setHeureDebut($dateDebut);
            $planning->setHeureFin($dateFin);
            $planning->setIdAgent($agent);
            $planning->setIdFiche($fiche->getId());
            $planning->setValidation(0);
            $planning->setHeureSaisie(new \Datetime());
            $em->persist($planning);
            $em->flush();
            $reponse = new Response($fiche->getId());
            return $reponse;
        }
        catch (Exception $e) {
            return new Response('Probleme quelque part');
        }
    }

    public function init_planning()
    {
        $planning = array();
        $planning["8h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        $planning["9h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        $planning["10h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        $planning["11h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        $planning["14h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        $planning["15h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        $planning["16h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        $planning["17h"] = [[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]]];
        return $planning;
    }

    public function transform($planning, $args, $datebegin)
    {
        foreach($planning as $jour){
            foreach($jour as $plann){
                $date = $plann["heureDebut"];
                $dateatraiter = $date->format('Y-m-d H:i');
                $date = explode(" ", $dateatraiter);
                $datejour = $date[0];
                $heureminutes = $date[1];
                $datejour = explode("-", $datejour);
                $annee = $datejour[0];
                $mois = (int)$datejour[1];
                $jour = (int)$datejour[2];
                $heureminutes = explode(':', $heureminutes);
                $heure = (int)$heureminutes[0];
                $minutes  = (int)$heureminutes[1];
                $jourbegin = (int)$datebegin->format('d');
                $jourchoisi = $jour - $jourbegin;
                if($minutes == 0)
                    $index = 0;
                elseif($minutes == 20)
                    $index = 1;
                else
                    $index = 2;
                $minutefin = $minutes + 15;
                if($minutes == 0)
                    $minutes = "00";
                $args[$heure.'h'][$index][$jourchoisi]['id'] = $plann['id'];
                $args[$heure.'h'][$index][$jourchoisi]['idDomaine'] = $plann['idDomaine'];
                $args[$heure.'h'][$index][$jourchoisi]['heure'] = $heure.":".$minutes ."-".$heure.":".$minutefin;
            }
        }
        return $args;
    }

    public function tradMonth($en_month){
        $month["January"] = "Janvier";
        $month["February"] = "Fevrier";
        $month["March"] = "Mars";
        $month["April"] = "Avril";
        $month["May"] = "Mai";
        $month["June"] = "Juin";
        $month["July"] = "Juiller";
        $month["Auguste"] = "Aout";
        $month["September"] = "Septembre";
        $month["October"] = "Octobre";
        $month["November"] = "Novembre";
        $month["December"] = "Decembre";
        return $month[$en_month];
    }

    public function tradDay($en_day){
        $month["Monday"] = "Lundi";
        $month["Tuesday"] = "Mardi";
        $month["Wednesday"] = "Mercredi";
        $month["Thursday"] = "Jeudi";
        $month["Friday"] = "Vendredi";
        return $month[$en_day];
    }

    public function startDateWeek($date){
        $actualDay = $date->format('N');
        $diffDay = $actualDay - 1;
        $modif = '-'.$diffDay.' day';
        $date->modify($modif);
        $actualHeure = $date->format('G');
        $modif = '-'.$actualHeure.' hour';
        $date->modify($modif);
        $actualMin = $date->format('i');
        $modif = '-'.$actualMin.' minute';
        $date->modify($modif);
        $actualSec = $date->format('s');
        $modif = '-'.$actualSec.' second';
        $date->modify($modif);
        return $date;
    }



    /**
     * open view to display user's reservations
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function openPlanningAction($Date)
    {
        $isuser = false;
	$isagent = false;
        $actualDate = ($Date != "") ? new \Datetime($Date) : new \Datetime();
        $actualMonth = $this->tradMonth($actualDate->format('F')) . " " . $actualDate->format('Y');
        $startActualWeek = $this->startDateWeek($actualDate);
        $date = $startActualWeek;
        for ($i = 0; $i < 5; $i++){
            $day = $startActualWeek->format('l');
            $day = $this->tradDay($day);
            $trad = $day . ' ' . $startActualWeek->format('d');
            $anneemonth = $date->format('Y-m');
            $index = $anneemonth . '-' . $startActualWeek->format('d');
            $days[$index] = $trad;
            $startActualWeek->modify('+1 day');
        }
        foreach ($this->getUser()->getRoles() as $role){
            if ($role == 'ROLE_USER'){
                $isuser = true;
            }
	    if ($role == 'ROLE_AGENT'){
                $isagent = true;
            }
        }
        $date->modify('-5 day');
        $date_before = clone $date;
        $date_after = clone $date;
        $date_before->modify('-7 day');
        $date_after->modify('+7 day');
        $args = $this->init_planning();
        $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:Planning");
        $repository_agent = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:PlanningAgent");
	if ($isagent)
       		$planning = $repository_agent->getPlanningAgentWeek($this->getUser()->getId(), $date);
        else
        	$planning = $repository->getPlanningUserWeek($this->getUser()->getId(), $date);
        $date->modify('-5 day');
	if($planning != NULL)
            $args = $this->transform($planning, $args, $date);
        return $this->render('PlanningBundle:Reservation:reservation.html.twig',array(
                'days' => $days,
                'reservations' => $args,
                'actualmonth' => $actualMonth,
                'afterDate' => $date_after->format('Y-m-d H:i:s'),
                'beforeDate' => $date_before->format('Y-m-d H:i:s'),
                'isuser' => $isuser
            )
        );
    }
}
