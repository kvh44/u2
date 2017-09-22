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
	
	public function findArticlesByCategoryId($category1_id = null, $category2_id = null, $offset= 0, $max = 10, $withUser = false, $count = false)
	{
		$q = $this->createQueryBuilder('a')
                        ->select('a.id, a.category1Id, a.category2Id, a.title, a.updatedAt')
                        ->where('a.isdeleted = :isdeleted')
                        ->setParameter('isdeleted', 0)
                        ->orderBy('a.id', 'DESC')
                        ;
                
                if($count === true){
                    return count($q->getQuery()->getResult());
                }
                
                if($max > 0) {
                    $q->setMaxResults($max);
                }
                
                if($offset > 0) {
                    $q->setFirstResult($offset);
                }
                
		if($withUser){
                    $q->innerJoin('AppBundle:UtoconsultUser', 'u', 'WITH', 'a.userId = u.id');
                    $q->addSelect('u.username, u.id as userId');
                }
                
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