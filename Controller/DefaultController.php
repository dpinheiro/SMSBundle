<?php

namespace dpinheiro\SMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('dpinheiroSMSBundle:Default:index.html.twig', array('name' => $name));
    }
}
