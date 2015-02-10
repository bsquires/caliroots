<?php

namespace Caliroots\ClothingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     *
     * @Template
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/men", name="men")
     *
     * @Template
     */
    public function menAction()
    {
        return array();
    }

    /**
     * @Route("/women", name="women")
     *
     * @Template
     */
    public function womenAction()
    {
        return array();
    }

    /**
     * @Route("/roots", name="roots")
     *
     * @Template
     */
    public function rootsAction()
    {
        return array();
    }
}
