<?php

namespace SIMA\OnlineStoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function showAction($category,$_format)
    {
        //$response = new Response("helo",200,array('Content-type' => 'text/xml' ));
        //return $response;
        return $this->render('SIMAOnlineStoreBundle:categories:category.html.twig',array('category' => $category ));
    }

    public function showArticlesAction($id)
    {
    	return $this->render('SIMAOnlineStoreBundle:categories:showArticles.html.twig',array('category_id' => $id ));
    }
}
