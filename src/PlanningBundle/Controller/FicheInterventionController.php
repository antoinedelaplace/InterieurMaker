<?php

namespace PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PlanningBundle\Entity\Planning;
use PlanningBundle\Entity\Agent;
use PlanningBundle\Entity\Domaine;
use PlanningBundle\Entity\FicheIntervention;
use Symfony\Component\Validator\Constraints\DateTime;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class FicheInterventionController extends Controller
{
	public function saveFicheInterventionAction(Request $request)
	{
		// Validation du formulaire de la fiche d'intervention
		try {
			$post = $request->request;
			$repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:FicheIntervention");
			$repo_planning = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:Planning");
			$em = $this->getDoctrine()->getManager();
			$fiche = $repository->find($post->get('idFiche'));	
			//TODO : Recuperer l'id du planning associer et update sa validation à 1			
			$creneau = $repo_planning->findOneByIdFiche($fiche->getId());
			$creneau->setValidation(true);
			$em->persist($creneau);
			//TODO : Verif que la fiche appartient bien au user co.
			$fiche->setProbleme($post->get('issue'));
			$fiche->setHabitation($post->get('home_type'));
			$em->persist($fiche);
			$em->flush();
			return $this->redirectToRoute('im_front_planning');
		}
		catch (Exception $e) {
			return new Response('Probleme quelque part');
		}
	}

	public function openFicheInterventionAction(Request $request)
	{
		$get = $request->query;
		$id = $get->get('id');
	    // Ouverture de sa fiche d'intervention
	    $repository = $this->getDoctrine()->getManager()->getRepository("PlanningBundle:FicheIntervention");
	    $fiche = $repository->find($id);
        $heuredebut = $repository->findHeure($id);
        $heuredebut = $heuredebut[0]['heureDebut'];
        if ($this->isJoinable($heuredebut))
            $webrtc = $this->webrtcHash($id);
        else
            $webrtc = NULL;
		$args = array(
			'habitation' => $fiche->getHabitation(),
			'rapport' => $fiche->getProbleme(),
            'webrtc' => $webrtc
		);
		return new Response(json_encode($args));
	}

	public function isJoinable($heure)
    {
        $before = new \DateTime();
        $after = new \DateTime();
        $before->modify('-15 minute');
        $after->modify('+15 minute');
        if ($heure >= $before && $heure <= $after)
            return TRUE;
        else
            return FALSE;
    }

    public function webrtcHash($id)
    {
        return (((($id * 42) + 1000 ) * 3) + 15101993);
    }

    public function webrtcDehash($hash)
    {
        return (((($hash - 15101993) / 3) - 1000) / 42);
    }

	public function newFicheInterventionAction($id)
	{
		//Retourne la vue pour remplir la fiche en lui passant la variable id
		return $this->render('PlanningBundle:FicheIntervention:fiche_intervention.html.twig',array(
				'id_fiche' => $id
	    		)
		);	
	}
}
