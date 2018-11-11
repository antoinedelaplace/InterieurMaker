<?php

namespace Im\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImFrontBundle:Default:home.html.twig', array('is_connected' => true));
    }

    public function subscribeAction()
    {
        return $this->render('ImFrontBundle:Default:subscribe.html.twig');
    }

    public function subscribeAgentAction()
    {
        return $this->render('ImFrontBundle:Default:agent-subscribe.html.twig');
    }

    public function newReservationAction()
    {
        return $this->render('ImFrontBundle:Default:reservation.html.twig', array ( 'new_rdv' => true));
    }

    public function newOthersReservationAction($Date, $domain)
    {
        return $this->render('ImFrontBundle:Default:reservation.html.twig', array ('Date' => $Date, 'new_rdv' => true, 'domain' => $domain));
    }

    public function viewReservationsAction()
    {
        return $this->render('ImFrontBundle:Default:reservation.html.twig');
    }

    public function viewGestionAgentAction()
    {
        return $this->render('ImFrontBundle:Default:gestion_agent.html.twig');
    }

    public function inscriptionAction()
    {
	    return $this->redirectToRoute('im_front_homepage');
    }

    public function viewOthersReservationsAction($Date)
    {
        return $this->render('ImFrontBundle:Default:reservation.html.twig', array ('Date' => $Date));
    }

    public function viewReservationsAgentAction()
    {
        return $this->render('ImFrontBundle:Default:reservation_agent.html.twig');
    }

    public function webrtcAction()
    {
        return $this->render('ImFrontBundle:Default:webrtc.html.twig');
    }
}
