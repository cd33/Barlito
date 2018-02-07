<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class SignUpType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
		->add('login')
		->add('password')
		->add('prenom')
		->add('nom')
		->add('save', submitType::class);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array(
			'data_class' => Client::class
		));
	}
}