<?php

namespace AppBundle\Controller;

use AppBundle\Model\Product;
use AppBundle\Model\ProductPrice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $product = new Product();

        $productPrice = new ProductPrice();

        $product->addProductPrice($productPrice);

        dump($this->get('validator')->validate($productPrice)); die();
    }
}
