<?php

namespace uniSistemas\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('uniSistemasBundle:Default:index.html.twig');
    }
}
