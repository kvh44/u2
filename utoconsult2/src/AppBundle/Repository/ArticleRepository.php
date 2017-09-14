<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ArticleRepository extends EntityRepository {
    public function findArticleById($id)
    {
        return $this->createQueryBuilder('a') 
                        ->where('a.id = :id and a.isdeleted = :isdeleted')
                        ->setParameter('id', $id)
                        ->setParameter('isdeleted', 0)
                        ->setMaxResults(1)
                        ->getQuery()
                        ->getOneOrNullResult();
    }
	
	public function findNextArticleById($id)
    {
        return $this->createQueryBuilder('a') 
                        ->where('a.id > :id and a.isdeleted = :isdeleted')
                        ->setParameter('id', $id)
                        ->setParameter('isdeleted', 0)
						->orderBy('a.id', 'ASC')
                        ->setMaxResults(1)
                        ->getQuery()
                        ->getOneOrNullResult();
    }
	
	public function findPreArticleById($id)
    {
        return $this->createQueryBuilder('a') 
                        ->where('a.id < :id and a.isdeleted = :isdeleted')
                        ->setParameter('id', $id)
                        ->setParameter('isdeleted', 0)
						->orderBy('a.id', 'DESC')
                        ->setMaxResults(1)
                        ->getQuery()
                        ->getOneOrNullResult();
    }
}