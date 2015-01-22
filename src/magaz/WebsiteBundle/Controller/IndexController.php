<?php

namespace magaz\WebsiteBundle\Controller;

use magaz\CommonBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template


//IndexController наследует пока  класс    Controller
//Пока не знаю  как  реализовать  'WebsiteBundle:tamplate:index.html.twig'  через  AbstractController
 
class IndexController extends Controller
{
/**
 * @Route("/", name="page_index")
 * 
 *
 */
 
     public function indexAction()
    {
          // $number = rand(1, $limit);

       return $this->render('WebsiteBundle:tamplate:index.html.twig' );
          
	
    } 
	   
	      
	  
  
}