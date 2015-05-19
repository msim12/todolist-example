<?php

namespace Main\ToDoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ToDoBundle:Default:index.html.twig', array('name' => $name));
    }
}
