<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TransactionType;
use AppBundle\Entity\Transaction;

class TransactionController extends Controller
{
    public function getTransactionsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $transactions = $em->getRepository('AppBundle:Transaction')->findAll();

        $parameters = array();
        $parameters['title'] = 'Liste des Transactions';
        $parameters['transactions'] = $transactions;
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

            return $this->redirectToRoute('transaction_show', array(
            'id' => $transaction->getTransacId()
            ));
        }

        return $this->render('AppBundle::transaction/add_transaction.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
