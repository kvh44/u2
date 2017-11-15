<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of AboutusRepository
 *
 * @author renard
 */
class AboutusRepository extends EntityRepository {
    public function findAboutus()
    {
        return $this->createQueryBuilder('a') 
                        ->setMaxResults(1)
                        ->getQuery()
                        ->getOneOrNullResult();
    }
}
