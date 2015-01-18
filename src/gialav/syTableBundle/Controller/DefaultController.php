<?php

namespace gialav\syTableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gialavsyTableBundle:Default:index.html.twig', array('name' => $name));
    }
}
