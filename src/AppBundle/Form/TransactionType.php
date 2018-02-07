<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use AppBundle\Entity\Transaction;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransactionType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
		->add('libelle')
		->add('dateof', DateType::class, array(
			'widget' => 'single_text'
		))
		->add('montant', MoneyType::class, array(
    		'divisor' => 100,
		))
		->add('save', submitType::class);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array(
			'data_class' => Transaction::class
		));
	}
}