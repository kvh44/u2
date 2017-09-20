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
	
	public function findArticlesByCategoryId($category1_id = null, $category2_id = null, $max = 10)
	{
		$q = $this->createQueryBuilder('a')
		                ->select('a.id, a.category1Id, a.category2Id, a.title')
						->where('a.isdeleted = :isdeleted')
                        ->setParameter('isdeleted', 0)
						->orderBy('a.id', 'DESC')
						->setMaxResults($max)
						;
						
		if($category1_id) {
			$q->andWhere('a.category1Id = :category1Id');
			$q->setParameter('category1Id', $category1_id);
		}

        if($category2_id) {
			$q->andWhere('a.category2Id = :category2Id');
			$q->setParameter('category2Id', $category2_id);
		}	 		
		
		return $q->getQuery()->getResult();
	}
}