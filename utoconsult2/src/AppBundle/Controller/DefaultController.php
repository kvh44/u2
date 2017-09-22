<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends FrontBaseController
{
    /**
     * @Route("/", name="homepage")
     * @Route("/index", name="index")
     * @Route("/index.html", name="indexpage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $articles = $this->container->get('app_utoconsult.ArticleService')->findHomeArticlesByCategory();
                
        return $this->render('AppBundle:Home:index.html.twig', array(
		'articles' => $articles
		));
    }       
}
