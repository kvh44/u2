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