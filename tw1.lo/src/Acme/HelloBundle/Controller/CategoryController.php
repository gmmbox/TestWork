<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function indexAction($name)
    {
        $category = $this->getDoctrine()
            ->getRepository('AcmeHelloBundle:Category')
            ->findOneByName($name);
        $products = $category->getProducts();

        return $this->render('AcmeHelloBundle:Category:category.html.twig',
            array('category'=>$category, 'products' => $products));
    }
}
