<?php


class PurchasedProductDAO
{
    private $id;
    private $product;
    private $shoppingCart;
    private $purchasedAmount;
    private $cretedAt;

    /**
     * @param $id
     * @param $product
     * @param $shoppingCart
     * @param $purchasedAmount
     * @param $cretedAt
     */
    public function __construct($id = "", $product = "", $shoppingCart = "", $purchasedAmount = "", $cretedAt = "")
    {
        $this->id = $id;
        $this->product = $product;
        $this->shoppingCart = $shoppingCart;
        $this->purchasedAmount = $purchasedAmount;
        $this->cretedAt = $cretedAt;
    }


}