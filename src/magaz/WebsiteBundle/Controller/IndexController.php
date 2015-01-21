<?php

namespace magaz\WebsiteBundle\Controller;

use magaz\CommonBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route(service="website.index.controller_service")
 *
 */


class IndexController extends AbstractController
{
/**
 * @Route("/", name="index_controler")
 * @Template
 */
 
 
 
/*
КАК Я ПОНЯЛ   ЭТО ТО ЖЕ САМОЕ
ПОЧЕМУ ЕСЛИ Я КОМЕЧУ  :index_controler
В routing.yml   SYMFONY НЕ СРАБАТЫВАЕТ :
#index_controler:
#    path:     / 
#    defaults: { _controller: WebsiteBundle:Index:index }

*/
 
     public function IndexAction()
     {
      return new Response( '<html><body>Number:kkkkk </body></html>');
	  
	  // return $this->render('WebsiteBundle:Default:index.html.twig');
	  

	  
	  
	  
     }
   
}

