<?php

namespace DM\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DMUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
