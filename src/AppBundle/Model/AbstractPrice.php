<?php

namespace AppBundle\Model;

abstract class AbstractPrice implements PriceInterface
{
    /**
     * @var float
     */
    private $value;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     *
     * @return AbstractPrice
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
