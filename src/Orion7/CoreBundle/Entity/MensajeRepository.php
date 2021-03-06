<?php

namespace Orion7\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MensajeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MensajeRepository extends EntityRepository
{
	public function findLatestByRolDestinado($rol)
    {
    	$qb = $this->createQueryBuilder('m')
                   ->select('m')
                   ->where('m.rolDestinado = :rol')
                   ->addOrderBy('m.horaCreado', 'DESC')
                   ->setParameter('rol', $rol);

        $qb->setMaxResults(1);
        $arrayReturn = $qb->getQuery()
                  ->getResult();

        if (count($arrayReturn)==1) {
        	return $arrayReturn[0];
        }
        	
        return new Mensaje();
    }
}
