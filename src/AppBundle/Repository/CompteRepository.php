<?php

namespace AppBundle\Repository;

/**
 * CompteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompteRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAll()
    {
        return $this->findBy(array(), array('client' => 'ASC'));
    }
}
