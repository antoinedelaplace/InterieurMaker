<?php

namespace WebRTCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebRTCBundle:Default:index.html.twig');
    }

}
