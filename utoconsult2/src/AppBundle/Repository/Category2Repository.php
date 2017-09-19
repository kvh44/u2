<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Category2Repository extends EntityRepository {
    
    public function findCategory2ById($id)
    {
        return $this->createQueryBuilder('c') 
                    ->where('c.id = :id')
                    ->setParameter('id', $id)
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getOneOrNullResult();
    }
    
    public function findAllCategory2ByCategory1Id($id_category1 = null)
    {
        $q = $this->createQueryBuilder('c') 
                    ->orderBy('c.orders', 'asc')
                    ->addOrderBy('c.id', 'asc')
                    ;
        
        if($id_category1){
            $q->where('c.category1Id = :category1Id');
            $q->setParameter('category1Id', $id_category1);
        }
        $result = $q->getQuery()->getResult();
        
        return $result;
    }
    
    public function findAllCategory2()
    {
        return $this->createQueryBuilder('c') 
                    ->orderBy('c.orders')
                    ->getQuery()
                    ->getResult();
    }
    
}