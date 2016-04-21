<?php

namespace Expert\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ExpertAcceuilBundle:Default:index.html.twig', array('name' => $name));
    }
}
