<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends FrontBaseController
{
    /**
     * @Route("/c1/{id}/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category1NameHtml")
     * @Route("/c1/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="category1Html")
     */
    public function category1Action(Request $request)
    {
        
    }
    
    /**
     * @Route("/c2/{id}/{name}.{_format}", requirements={"id" = "\d+"}, defaults={"name" = null, "_format" = "html|htm"}, name="category2NameHtml")
     * @Route("/c2/{id}.{_format}", requirements={"id" = "\d+"}, defaults={"_format" = "html|htm"}, name="category2Html")
     */
    public function category2Action(Request $request)
    {
        
    }
}