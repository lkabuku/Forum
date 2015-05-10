<?php

namespace Laposte\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LaposteUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
