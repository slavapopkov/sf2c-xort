<?php

namespace magaz\WebsiteBundle\Controller;

use magaz\CommonBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class IndexController extends AbstractController
{

/**
 * @Route("/", name="page_index")
 */
 
     public function indexAction()
    {
       return $this->render('WebsiteBundle:tamplate:index.html.twig' );
    } 
	
}
