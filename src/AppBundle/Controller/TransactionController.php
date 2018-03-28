<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TransactionType;
use AppBundle\Entity\Transaction;

class TransactionController extends AbstractController
{
    public function getTransactionsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $transactions = $em->getRepository('AppBundle:Transaction')->findAll();             

        $parameters = array();
        $parameters['title'] = 'Liste des Transactions';
        $parameters['transactions'] = $transactions;
        $parameters['currentClient'] = $this->getClient();
        return $this->render('AppBundle::transaction/transaction.html.twig', $parameters);
    }

    public function showTransactionsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $transac_id = $request->get('id');

        if($transac_id) {
            $transaction = $em->getRepository('AppBundle:Transaction')->find($transac_id);

            if(!empty($transaction)){
                $parameters = array();
                $parameters['title'] = 'The Transaction';
                $parameters['transaction'] = $transaction;
                $parameters['currentClient'] = $this->getClient();
                return $this->render('AppBundle::transaction/transaction_show.html.twig', $parameters);
            }
        }

        return $this->redirectToRoute('transactions');        
    }

    public function addTransactionsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        
        $transaction = new Transaction();

        $form = $this->createForm(TransactionType::class, $transaction);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $transaction = $form->getData();

            $em->persist($transaction);
            $em->flush();

            $em->getRepository('AppBundle:Transaction')->findAll();

            return $this->redirectToRoute('transaction_show', array(
            'id' => $transaction->getTransacId(),
            'currentClient' => $this->getClient()
            ));
        }

        return $this->render('AppBundle::transaction/add_transaction.html.twig', array(
            'form' => $form->createView(),
            'currentClient' => $this->getClient()
        ));
    }
}
