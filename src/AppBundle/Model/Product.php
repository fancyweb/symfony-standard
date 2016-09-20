<?php

namespace AppBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Collection
     */
    private $productPrices;

    public function __construct()
    {
        $this->productPrices = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getProductPrices()
    {
        return $this->productPrices;
    }

    /**
     * @param ProductPrice $productPrice
     *
     * @return Product
     */
    public function addProductPrice(ProductPrice $productPrice)
    {
        if (!$this->productPrices->contains($productPrice)) {
            $this->productPrices->add($productPrice);
            $productPrice->setProduct($this);
        }

        return $this;
    }

    /**
     * @param ProductPrice $productPrice
     *
     * @return Product
     */
    public function removeProductPrice(ProductPrice $productPrice)
    {
        $this->productPrices->removeElement($productPrice);

        return $this;
    }
}
