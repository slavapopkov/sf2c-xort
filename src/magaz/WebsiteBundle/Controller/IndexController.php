<?php

namespace magaz\WebsiteBundle\Controller;

use magaz\CommonBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class IndexController extends Controller
{

/**
 * @Route("/", name="Page_index")
 */
 
     public function indexAction()
    {
       return $this->render('WebsiteBundle:tamplate:index.html.twig' );
    } 
	
}
