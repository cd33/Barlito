<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\Compte;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompteType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
		->add('libelle')
		->add('save', submitType::class);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array(
			'data_class' => Compte::class
		));
	}
}