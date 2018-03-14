<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{

    public function indexAction(Request $request)
    {
        $admin = $this->isAdmin();
        if($admin)
            return $this->redirectToRoute('sonata_admin_dashboard');

        $currentClient = $this->getClient();
        if($currentClient) {
            return $this->render('default/index.html.twig', array('currentClient' => $currentClient));
        }
        //dump($user);die;
    }
}
