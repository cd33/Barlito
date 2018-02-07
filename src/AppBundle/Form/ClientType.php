<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\Client;
use AppBundle\Entity\User;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
		->add('prenom')
		->add('nom')
		->add('user', EntityType::class, array(
			'class' => User::class
		))
		->add('save', submitType::class);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array(
			'data_class' => Client::class
		));
	}
}