<?php

namespace Caliroots\ClothingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClothingBundle:Default:index.html.twig', array('name' => 'hi'));
    }
}
