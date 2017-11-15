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
}
