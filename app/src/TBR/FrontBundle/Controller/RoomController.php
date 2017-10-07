<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoomController extends Controller
{

    public function newAction()
    {

    }
    public function listAction()
    {
        return $this->render('FrontBundle:Room:list.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('FrontBundle:Room:show.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('FrontBundle:Room:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('FrontBundle:Room:delete.html.twig', array(
            // ...
        ));
    }

}
