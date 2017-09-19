<?php

namespace AppBundle\Services;

use AppBundle\Entity\UtoconsultArticleCategory1;
use AppBundle\Entity\UtoconsultArticleCategory2;
use AppBundle\Services\CacheService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;

class CategoryService {
    /**
     * @var Registry
     */
    protected $doctrine;

    /*
     * @var em
     */
    protected $em;
    
    
    
    protected $session;





    protected $cacheService;
    
    
    public function __construct(Registry $doctrine, Session $session,CacheService $cacheService) 
    {
        $this->doctrine = $doctrine;
        $this->em = $this->doctrine->getManager();
        $this->session = $session;
        $this->cacheService = $cacheService;
    }
    
    public function getCategories()
    {
        $categories = $this->cacheService->getCategoriesCache();

        if(!$categories){
            $categories1 = $this->em->getRepository('AppBundle:UtoconsultArticleCategory1')->findAllCategory1();
            $categories = array('categories1' => $categories1, 'categories2' => array());

            if($categories1){
                foreach ($categories1 as $category1){
                    $categories2 = $this->em->getRepository('AppBundle:UtoconsultArticleCategory2')
                            ->findAllCategory2ByCategory1Id($category1->getId());
                    $categories['categories2'][$category1->getId()] = $categories2;
                }
            }
            
            $this->cacheService->setCategoriesCache(serialize($categories));
        } else {
            $categories = unserialize($categories);
        }
        
        return $categories;
    }        
}