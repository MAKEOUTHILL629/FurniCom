<?php

class ShoppingCart
{
    private $id;
    private $consumer;
    private $createAt;
    private $updateAt;
    private $purchasedProducts;
    private $subTotal;
    private $connection;
    private $shopingCartDAO;

    /**
     * @param $id
     * @param $consumer
     * @param $createAt
     * @param $updateAt
     * @param $purchasedProducts
     * @param $subTotal
     */
    public function __construct($id = "", $consumer = "", $createAt = "", $updateAt = "", $purchasedProducts = "", $subTotal = "")
    {
        $this->id = $id;
        $this->consumer = $consumer;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->purchasedProducts = $purchasedProducts;
        $this->subTotal = $subTotal;

        $this->connection = new Connection();
        $this->shopingCartDAO = new ShoppingCartDAO($id, $consumer, $createAt, $updateAt, $purchasedProducts, $subTotal);
    }


}