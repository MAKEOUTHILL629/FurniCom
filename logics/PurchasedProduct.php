<?php

class PurchasedProduct
{
    private $id;
    private $product;
    private $shoppingCart;
    private $purchasedAmount;
    private $cretedAt;
    private $connection;
    private $purchasedProductDAO;

    /**
     * @param $id
     * @param $product
     * @param $shoppingCart
     * @param $purchasedAmount
     * @param $cretedAt
     */
    public function __construct($id, $product, $shoppingCart, $purchasedAmount, $cretedAt)
    {
        $this->id = $id;
        $this->product = $product;
        $this->shoppingCart = $shoppingCart;
        $this->purchasedAmount = $purchasedAmount;
        $this->cretedAt = $cretedAt;
        $this->connection = new Connection();
        $this->purchasedProductDAO = new PurchasedProductDAO($id, $product, $shoppingCart, $purchasedAmount, $cretedAt);
    }


}