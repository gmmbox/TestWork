<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction($name)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AcmeHelloBundle:Product');

        $item = $repository->findOneByName($name);

        if (!$item) {
            throw $this->createNotFoundException('No product found for name '.$name);
        }

        return $this->render('AcmeHelloBundle:Product:product.html.twig', array('item' => $item));
    }
}
