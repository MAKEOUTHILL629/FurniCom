<?php


class ShoppingCartDAO
{
    private $id;
    private $consumer;
    private $createAt;
    private $updateAt;
    private $purchasedProducts;
    private $subTotal;

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
    }

    public function create()
    {
        return "INSERT INTO shopping_carts (fk_consumer, purchased_products, subtotal) VALUES ('" . $this->consumer . "', '" . $this->purchasedProducts . "', '" . $this->subTotal . "');";
    }


    public function consult()
    {
        return "SELECT id_shopping_cart, fk_consumer,created_at ,updated_at, purchased_products, subtotal    FROM shopping_carts
                WHERE id_shopping_cart = " . $this->id;
    }


}