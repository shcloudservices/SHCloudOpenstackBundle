<?php

namespace SHCloud\OpenstackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SHCloudOpenstackBundle:Default:index.html.twig', array('name' => $name));
    }
}
