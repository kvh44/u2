<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository {
    public function findUserById($id)
    {
		return $this->createQueryBuilder('u')
					->where('u.id = :id and u.active = :active')
					->setParameter('id', $id)
					->setParameter('active', 1)
					->setMaxResults(1)
					->getQuery()
					->getOneOrNullResult();
	}
}