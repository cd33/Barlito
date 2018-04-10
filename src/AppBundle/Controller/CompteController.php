<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CompteType;
use AppBundle\Entity\Compte;

class CompteController extends AbstractController
{
    public function getComptesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $comptes = $em->getRepository('AppBundle:Compte')->findAll();
        $clients = $em->getRepository('AppBundle:Client')->findAll();

        $parameters = array();
        $parameters['title'] = 'Liste des comptes';
        $parameters['comptes'] = $comptes;
        $parameters['clients'] = $clients;
        $parameters['currentClient'] = $this->getClient();
        return $this->render('AppBundle::compte/compte.html.twig', $parameters);
    }

    public function showComptesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $numero = $request->get('id');
        
        if($numero) {
            $compte = $em->getRepository('AppBundle:Compte')->find($numero);

            if(!empty($compte)){
                $parameters = array();
                $parameters['title'] = 'The Compte';
                $parameters['compte'] = $compte;
                $parameters['currentClient'] = $this->getClient();
                return $this->render('AppBundle::compte/compte_show.html.twig', $parameters);
            }
        }

        return $this->redirectToRoute('comptes');
    }

    public function addComptesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        
        $compte = new Compte();

        $form = $this->createForm(CompteType::class, $compte);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $compte = $form->getData();

            $em->persist($compte);
            $em->flush();

            return $this->redirectToRoute('compte_show', array(
            'id' => $compte->getNumero(),
            'currentClient' => $this->getClient()
            ));
        }

        return $this->render('AppBundle::compte/add_compte.html.twig', array(
            'form' => $form->createView(),
            'currentClient' => $this->getClient()
        ));
    }
}
