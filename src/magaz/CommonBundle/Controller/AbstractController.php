<?php

namespace magaz\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * @Route(service="common.abstract.class")
 */
abstract  class AbstractController
{
    /** @var EngineInterface */
    private $templating;

    /**
     * @param EngineInterface $templating
     */
    public function setTemplating(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    /**
     * @param $view
     * @return string
     */
    function responseAction($view )
    {
        return $this->templating->render($view);
    }


}