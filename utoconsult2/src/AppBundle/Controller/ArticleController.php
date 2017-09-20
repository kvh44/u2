<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends FrontBaseController
{
    /**
     * @Route("/page/{id}/{title}.{_format}", requirements={"id" = "\d+"}, defaults={"title" = null, "_format" = "html|htm"}, name="singlePageTileHtml")
     * @Route("/page/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="singlePageHtml")
     * @Route("/articles/single/id/{id}/name/{title}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="singlePageOld")
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
