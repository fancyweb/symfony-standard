<?php

namespace AppBundle\Controller;

use AppBundle\Model\Product;
use AppBundle\Model\ProductPrice;
use AppBundle\Model\VariantSamplePrice;
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
        $variantSamplePrice = new VariantSamplePrice();

        dump($this->get('validator')->validate($variantSamplePrice)); die();
    }
}
