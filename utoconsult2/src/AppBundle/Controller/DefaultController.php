<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/page/{id}/{title}.{_format}", requirements={"id" = "\d+"}, defaults={"title" = null, "_format" = "html|htm"}, name="singlePageTileHtml")
     * @Route("/page/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="singlePageHtml")
     */
    public function singlePageAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:UtoconsultMyArticle')->findArticleById($id);

        if($article){
                $user = $em->getRepository('AppBundle:UtoconsultUser')->findUserById($article->getUserId());
                $nextArticle = $em->getRepository('AppBundle:UtoconsultMyArticle')->findNextArticleById($id);
                $preArticle = $em->getRepository('AppBundle:UtoconsultMyArticle')->findPreArticleById($id);
        } 
        

        $path['title'] = '文章: ' . $article->getTitle();
        $path['url'] = $this->generateUrl('singlePageTileHtml', array('id' => $article->getId(), 'title' => $article->getTitle()));
        $paths[] = $path;

        return $this->render('AppBundle:Article:single.html.twig', array(
		'article' => $article,
                'paths' => $paths,
		'user' => $user ? $user : null, 
		'nextArticle' => $nextArticle ? $nextArticle : null,
		'preArticle' => $preArticle ? $preArticle : null
		));
    }        
}
