<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\UtoconsultArticleCategory1;
use AppBundle\Entity\UtoconsultArticleCategory2;

class CategoryController extends FrontBaseController
{
    /**
     * @Route("/c1/{id}/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category1NameHtml")
     * @Route("/c1/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="category1Html")
     * @Route("/articles/index/category/{id}/name/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category1old")
     */
    public function category1Action(Request $request, UtoconsultArticleCategory1 $category1)
    {
        $category1_id = $request->get('id');
        $articles = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory1($category1_id, 0, 10, true, false);
        //$count = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory1($category1_id, null, null, false, true);
		$path['title'] = $category1->getName();
        $path['url'] = $this->generateUrl('category1NameHtml', array('id' => $category1->getId(), 'name' => $category1->getName(), '_format' => 'html'));
        $paths[] = $path;
		
        return $this->render('AppBundle:Category:category1.html.twig', array(
			'articles' => $articles,
			'category1Id' => $category1_id,
			'paths' => $paths
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
        $category1_id = $request->get('id');  
        $total = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory1($category1_id, null, null, false, true);
        $totalFiltered = $total;
        $articles = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory1($category1_id, $offset, $limit, true, false);

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
    public function category2Action(Request $request, UtoconsultArticleCategory2 $category2)
    {
        $category2_id = $request->get('id');
        $articles = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory2($category2_id, 0, 10, true, false);
        //$count = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory2($category2_id, null, null, false, true);
		$path['title'] = $category2->getName();
        $path['url'] = $this->generateUrl('category2NameHtml', array('id' => $category2->getId(), 'name' => $category2->getName(), '_format' => 'html'));
        $paths[] = $path;
		
        return $this->render('AppBundle:Category:category2.html.twig', array(
			'articles' => $articles,
			'category2Id' => $category2_id,
			'paths' => $paths
		));
    }
	
	/**
     * @Route("/ajax/c2/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category2NameHtmlAjax")
     */
    public function category2ListAjaxAction(Request $request) {
		
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
        $category2_id = $request->get('id');  
        $total = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory2($category2_id, null, null, false, true);
        $totalFiltered = $total;
        $articles = $this->container->get('app_utoconsult.ArticleService')->findArticlesByCategory2($category2_id, $offset, $limit, true, false);

        return new JsonResponse(
                array(
                    'data' => $articles,
                    'recordsTotal' => $total,
                    'recordsFiltered' => $totalFiltered
                )
        );
    }
}