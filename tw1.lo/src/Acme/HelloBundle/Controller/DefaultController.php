<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\HelloBundle\Entity\Category;
use Acme\HelloBundle\Entity\Product;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AcmeHelloBundle:Product');

        $products = $repository->findAll();

        $repository = $this->getDoctrine()
            ->getRepository('AcmeHelloBundle:Category');

        $categories = $repository->findAll();

        return $this->render('AcmeHelloBundle:Default:index.html.twig',
            array('products' => $products, 'categories' => $categories));
    }
}
