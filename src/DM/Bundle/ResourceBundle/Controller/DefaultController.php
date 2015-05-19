<?php

namespace DM\Bundle\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DMResourceBundle:Default:index.html.twig', array('name' => $name));
    }
}
