<?php

namespace AppBundle\Services;

use AppBundle\Entity\UtoconsultArticleCategory1;
use AppBundle\Entity\UtoconsultArticleCategory2;
use AppBundle\Services\CacheService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Bundle\DoctrineBundle\Registry;

class ArticleService {
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
	
	public function findHomeArticlesByCategory()
	{
		$categories1 = $this->em->getRepository('AppBundle:UtoconsultArticleCategory1')->findAllCategory1();
		$articles = array();
		foreach($categories1 as $category1){
			$articles[$category1->getId()]['name'] = $category1->getName();
                        $articles[$category1->getId()]['photo'] = $category1->getPhoto1();
			$articles[$category1->getId()]['data'] = $this->em->getRepository('AppBundle:UtoconsultMyArticle')->findArticlesByCategoryId($category1->getId());
		}
		return $articles;
	}
}