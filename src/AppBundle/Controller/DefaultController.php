<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       $user = $this->get('security.token_storage')->getToken()->getUser();

        if(in_array('ROLE_SUPER_ADMIN',$user->getRoles()))
            return $this->redirectToRoute('sonata_admin_dashboard');

        if($user) {
            $em = $this->getDoctrine()->getManager();
            // $user->addRole('ROLE_SUPER_ADMIN');
            // $em->flush();
            $client = $em->getRepository('AppBundle:Client')->findOneByUser($user);
            //dump($client);$
            if($client) {
                return $this->render('default/index.html.twig', array('client' => $client));
            }
        }
        //dump($user);die;
    }
}
