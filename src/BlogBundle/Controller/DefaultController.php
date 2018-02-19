<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
 	/**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function indexAction()
    {

    	$posts = $this->getDoctrine()->getManager()->getRepository('BlogBundle:Post')->findAll();

        return $this->render('default/index.html.twig', [ 'posts' => $posts ]);
    }
}
