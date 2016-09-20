<?php

namespace AppBundle\Model;

interface VariablePriceInterface extends PriceInterface
{
    /**
     * @return int
     */
    public function getFromQuantity();
}
