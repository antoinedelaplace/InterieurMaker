<?php

namespace PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PlanningBundle\Entity\Planning;
use PlanningBundle\Entity\PlanningAgent;
use PlanningBundle\Entity\Agent;
use PlanningBundle\Entity\Domaine;
use PlanningBundle\Entity\FicheIntervention;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model;

class AgentController extends Controller
{
    public function getPlanningJourDescribe(Request $request){
        $post = $request->request;
        $date = $post->get('dateTime');
        $date = new \Datetime($date);
        $actualMonth = $this->tradMonth($date->format('F')) . " " . $date->format('Y');
        $startActualWeek = $this->forward('planning.reservation:startDateWeek', array('date' => $date));
        for ($i = 0; $i < 5; $i++){
            $day = $startActualWeek->format('l');
            $day = $this->forward('planning.reservation:tradDay', array('en_day' => $day));
            $trad = $day . ' ' . $startActualWeek->format('d');
            $days[$i] = $trad;
            $startActualWeek->modify('+1 day');
        }
        $date->modify('-5 day');
        return[$actualMonth => $days];
    }

    /**
     * open view to display user's reservations
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function openPlanningAction($Date)
    {
        $isuser = false;
        $actualDate = ($Date != "") ? new \Datetime($Date) : new \Datetime();
        $actualMonth = $this->forward('planning.reservation:tradMonth', array('en_month' => $actualDate->format('F'))) . " " . $actualDate->format('Y');
        $startActualWeek = $this->forward('planning.reservation:startDateWeek', array('date' => $actualDate));
        $date = $startActualWeek;
        for ($i = 0; $i < 5; $i++) {
            $day = $startActualWeek->format('l');
            $day = $this->forward('planning.reservation:tradDay', array('en_day' => $day));
            $trad = $day . ' ' . $startActualWeek->format('d');
            $anneemonth = $date->format('Y-m');
            $index = $anneemonth . '-' . $startActualWeek->format('d');
            $days[$index] = $trad;
            $startActualWeek->modify('+1 day');
        }
        foreach ($this->getUser()->getRoles() as $role) {
            if ($role == 'ROLE_USER') {
                $isuser = true;
                continue;
            }
        }
        $date->modify('-5 day');
        $date_before = clone $date;
        $date_after = clone $date;
        $date_before->modify('-7 day');
        $date_after->modify('+7 day');
        $args = $this->forward('planning.reservation:init_planning');
        $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:PlanningAgent");
        $planning = $repository->getPlanningAgentWeek($this->getUser()->getId(), $date);
        $date->modify('-5 day');
        if ($planning != NULL)
            $args = $this->forward('planning.reservation:transform', array('planning' => $planning, 'args' => $args, 'datebegin' => $date));
        return $this->render('PlanningBundle:Reservation:reservation.html.twig', array(
                'days' => $days,
                'reservations' => $args,
                'actualmonth' => $actualMonth,
                'afterDate' => $date_after->format('Y-m-d H:i:s'),
                'beforeDate' => $date_before->format('Y-m-d H:i:s'),
                'isuser' => $isuser
            )
        );
    }


    /**
     * open view to manage agents
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function gestionAgentAction()
    {
        //TODO Récupérer liste des agents
        $repository = $this->getDoctrine()->getManager()->getRepository('UserBundle:User');
        $users = $repository->findAll();
        foreach ($users as $agent){
            foreach ($agent->getRoles() as $role){
                if ($role == 'ROLE_AGENT'){
                    $agents[$agent->getId()] = $agent->getNom() . " " . $agent->getPrenom();
                }
            }
        }
        if (empty($agents))
            $agents[0] = "Aucun agent enregistre";
        $repo_domaine = $this->getDoctrine()->getManager()->getRepository('PlanningBundle:Domaine');
        $domaines = array();
        $domaineAll = $repo_domaine->findAll();
        foreach ($domaineAll as $domaine){
            $domaines[$domaine->getId()] = $domaine->getNomDomaine();
        }

        return $this->render('PlanningBundle:Agent:gestion_agent.html.twig',array(
                'agents' => $agents,
                'domaines' => $domaines
            )
        );
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function saveInfosAgentAction(Request $request)
    {
        try {
            $post = $request->request;
            $agent = $post->get('agent');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('PlanningBundle:PlanningAgent');

            if (!empty($post->get('domaines'))) {
                foreach ($post->get('domaines') as $domaine) {
                    $isDomaineAdd = $repository->findOneBy(array('idDomaine' => $domaine, 'idAgent' => $agent));
                    var_dump($isDomaineAdd);
                    if (empty($isDomaineAdd)) {
                        $planningAgent = new PlanningAgent();
                        $planningAgent->setIdAgent($agent);
                        $planningAgent->setIdDomaine($domaine);
                        $em->persist($planningAgent);
                        $em->flush();
                    }
                }
            }
            return $this->redirectToRoute('im_front_gestion_agent');
        }
        catch (\Exception $e){
            return $this->redirectToRoute('im_front_gestion_agent');
        }
    }
}
