<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Category1Repository extends EntityRepository {
    
    public function findCategory1ById($id)
    {
        return $this->createQueryBuilder('c') 
                    ->where('c.id = :id')
                    ->setParameter('id', $id)
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
    }
    
    public function findAllCategory1()
    {
        return $this->createQueryBuilder('c') 
                    ->getQuery()
                    ->getResult();
    }
    
}