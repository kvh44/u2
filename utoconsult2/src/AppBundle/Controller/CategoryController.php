<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends FrontBaseController
{
    /**
     * @Route("/c1/{id}/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category1NameHtml")
     * @Route("/c1/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="category1Html")
     * @Route("/articles/index/category/{id}/name/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category1old")
     */
    public function category1Action(Request $request)
    {
        $category1_id = $request->get('id');
        $articles = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory1($category1_id, 0, 10, true, false);

        return $this->render('AppBundle:Category:category1.html.twig', array(
		'articles' => $articles,
                'category1Id' => $category1_id
		));
    }
    /**
     * @Route("/ajax/c1/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category1NameHtmlAjax")
     */
    public function category1ListAjaxAction(Request $request) {

        if (strlen($request->query->get('start')) > 0) {
            $offset = $request->query->get('start');
        } else {
            $offset = 0;
        }

        if (strlen($request->query->get('length')) > 0) {
            $limit = $request->query->get('length');
        } else {
            $limit = 10;
        }

        $word = null;
        $search = $request->query->get('search');
        if (is_array($search)) {
            if (array_key_exists('value', $search)) {
                $word = $search['value'];
            }
        }

        $total = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory1($category1_id, null, null, false, true);
        $totalFiltered = $total;
        $articles = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory1($category1_id, $offset, $limit, false, false);

        return new JsonResponse(
                array(
                    'data' => $articles,
                    'recordsTotal' => $total,
                    'recordsFiltered' => $totalFiltered
                )
        );
    }
    
    /**
     * @Route("/c2/{id}/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category2NameHtml")
     * @Route("/c2/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="category2Html")
     * @Route("/articles/index/category2/{id}/name/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category2old")
     */
    public function category2Action(Request $request)
    {
        
    }
}