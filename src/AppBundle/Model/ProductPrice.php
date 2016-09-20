<?php

namespace AppBundle\Model;

class ProductPrice implements VariablePriceInterface
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var float
     */
    private $reducedValue;

    /**
     * @var int
     */
    private $fromQuantity;

    /**
     * @var Product
     */
    private $product;

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
     * @return ProductPrice
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getReducedValue()
    {
        return $this->reducedValue;
    }

    /**
     * @param float $reducedValue
     *
     * @return ProductPrice
     */
    public function setReducedValue($reducedValue)
    {
        $this->reducedValue = $reducedValue;

        return $this;
    }

    /**
     * @return int
     */
    public function getFromQuantity()
    {
        return $this->fromQuantity;
    }

    /**
     * @param int $fromQuantity
     *
     * @return ProductPrice
     */
    public function setFromQuantity($fromQuantity)
    {
        $this->fromQuantity = $fromQuantity;

        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     *
     * @return ProductPrice
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;

        return $this;
    }
}
