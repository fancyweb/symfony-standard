<?php

namespace AppBundle\Model;

interface PriceInterface
{
    /**
     * @return float
     */
    public function getValue();

    /**
     * @return float|null
     */
    public function getReducedValue();
}
