<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends FrontBaseController
{
    /**
     * @Route("/", name="homepage")
     * @Route("/index", name="index")
     * @Route("/index.html", name="indexHtml")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $articles = $this->container->get('app_utoconsult.ArticleService')->findHomeArticlesByCategory();
                
        return $this->render('AppBundle:Home:index.html.twig', array(
		'articles' => $articles
		));
    }    
    
    /**
     * @Route("/aboutus", name="aboutus")
     * @Route("/aboutus.html", name="aboutusHtml")
     */
    public function aboutusAction(Request $request)
    {
        $aboutus = $this->container->get('app_utoconsult.ArticleService')->findAboutus();
        
        return $this->render('AppBundle:Home:aboutus.html.twig', array(
		'aboutus' => $aboutus
		));
    }   
    
    /**
     * @Route("/search", name="search")
     * @Route("/search.html", name="searchHtml")
     */
    public function searchAction(Request $request)
    {
        $result = null;
        if(strlen($request->get('word')) > 0){
            $word = $request->get('word');
            $offset = $request->get('offset')?$request->get('offset'):0;
            $limit = $request->get('limit')?$request->get('limit'):$this->getParameter('search.article.numberResults');

            $resultSet = $this->container->get('app_utoconsult.SearchService')->searchArticleManager(0, $offset, $limit, $word);
            if($resultSet['code'] === 200){
                $result['resultSet'] = $resultSet['data'];
            } 

            $total = $this->container->get('app_utoconsult.SearchService')->searchArticleManager(1, $offset, $limit, $word);
            if($total['code'] === 200){
                $result['total'] = $total['data'];
                $result['word'] = $word;
            } 
        }
        return $this->render('AppBundle:Search:index.html.twig', array(
                'result' => $result
        ));
    }
}
