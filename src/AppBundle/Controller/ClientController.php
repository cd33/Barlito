<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ClientType;
use AppBundle\Entity\Client;

class ClientController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function getClientsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('AppBundle:Client')->findAll();

        $parameters = array();
        $parameters['title'] = 'Liste des clients';
        $parameters['clients'] = $clients;
        return $this->render('AppBundle::client/client.html.twig', $parameters);
    }

    public function showClientsAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $client_id = $request->get('id');
        
        if($client_id) {
            $client = $em->getRepository('AppBundle:Client')->find($client_id);

            if(!empty($client)){
                $parameters = array();
                $parameters['title'] = 'The Client';
                $parameters['client'] = $client;
                return $this->render('AppBundle::client/client_show.html.twig', $parameters);
            }
        }
    }

    public function addClientsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        
        $client = new Client();

        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $client = $form->getData();

            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('client_show', array(
            'id' => $client->getClientId()
            ));
        }

        return $this->render('AppBundle::client/add_client.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
