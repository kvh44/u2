<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    /**
     * @Route("/search/result", name="searchResult")
     */
    public function searchResultAction(Request $request)
    {
        $offset = $request->get('offset')?$request->get('offset'):0;
        $limit = $request->get('limit')?$request->get('limit'):$this->getParameter('search.article.numberResults');
        $word = $request->get('word');
        $only_total = $request->get('only_total');
        
        $result = $this->container->get('app_utoconsult.SearchService')->searchArticleManager($only_total, $offset, $limit, $word);

        if($request->get('type') === 'ajax' && $request->get('format') === 'html'){
                return $this->render('AppBundle:Search:resultPartial.html.twig', array(
                        'resultSet' => $result['data']
                ));
            }
        
        return new JsonResponse(
                array($result)
        );
    }
}
