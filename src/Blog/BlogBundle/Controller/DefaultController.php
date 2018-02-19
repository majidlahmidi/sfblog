<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/testblog", name="blog")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
