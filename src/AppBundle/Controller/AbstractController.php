<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AbstractController extends Controller
{

    public function getUser() {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if($user) {
            return $user;
        }
    }

    public function getClient() {
       $user = $this->getUser();
       $client = null;
        if($user) {
            $client = $this->getDoctrine()->getManager()->getRepository('AppBundle:Client')->findOneByUser($user);
        }
        return $client;
    }

    public function isAdmin() {
        $user = $this->getUser();
        if($user) {
            return $this->get("security.authorization_checker")->isGranted('ROLE_SUPER_ADMIN');
        }
    }
}