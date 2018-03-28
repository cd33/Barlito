<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ClientType;
use AppBundle\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ClientController extends AbstractController
{
    public function getClientsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $clients = null;

        $form = $this->createFormBuilder(array())
            ->add('data', TextType::class, array(
                'required' => false
            ))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
             $data = $form->getData();
             $clients = $em->createQueryBuilder()
                ->select('c')
                ->from('AppBundle:Client','c')
                ->where('c.nom like :data')
                ->orWhere('c.prenom like :data')
                ->setParameter('data', "%".$data['data']."%")
                ->getQuery()
                ->getResult();
        }
        
        if(empty($clients) && !$form->isValid()) {
            $clients = $em->getRepository('AppBundle:Client')->findAll();
        }

        $parameters = array();
        $parameters['title'] = 'Liste des clients';
        $parameters['clients'] = $clients;
        $parameters['currentClient'] = $this->getClient();
        $parameters['form'] = $form->createView();

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
                $parameters['currentClient'] = $this->getClient();
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
            'id' => $client->getclient_id(),
            'currentClient' => $this->getClient()
            ));
        }
        
        return $this->render('AppBundle::client/add_client.html.twig', array(
            'form' => $form->createView(),
            'currentClient' => $this->getClient()
        ));
    } 
       
}
