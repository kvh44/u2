<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontBaseController extends Controller
{
    public function preExecute()
    {
        $categories = $this->get('request_stack')->getCurrentRequest()->getSession()->get('categories');
        if(!$categories){
            $categories = $this->container->get('app_utoconsult.CategoryService')->getCategories();
            $this->get('request_stack')->getCurrentRequest()->getSession()->set('categories', $categories);
        }
    }
}