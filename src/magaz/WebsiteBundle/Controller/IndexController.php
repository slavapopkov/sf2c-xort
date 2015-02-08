<?php

namespace magaz\WebsiteBundle\Controller;

use magaz\CommonBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class IndexController
 * @package magaz\WebsiteBundle\Controller
 */

class IndexController extends AbstractController
{


/**
 * @Route("/", name="Page_index")
 */

    /**
     * @return string
     */
    public function  indexAction(){

        return $this->responseAction( 'WebsiteBundle/tamplate/index.html.twig');

    }




}
