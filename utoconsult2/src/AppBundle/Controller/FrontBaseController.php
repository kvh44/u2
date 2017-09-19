<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Services\CategoryService;

class FrontBaseController extends Controller
{
    public function preExecute()
    {
        //$categories = $this->container->get('app_utoconsult.CategoryService')->getCategories();
        
        $categories = $this->get('request_stack')->getCurrentRequest()->getSession()->get('categories');
        if(!$categories){
            $categories = $this->container->get('app_utoconsult.CategoryService')->getCategories();
            $this->get('request_stack')->getCurrentRequest()->getSession()->set('categories', $categories);
        }
    }
}