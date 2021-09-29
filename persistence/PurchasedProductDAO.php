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


    public function create()
    {
        return "INSERT INTO purchased_products ( fk_product, fk_shopping_cart, purchased_amount) VALUES
                                                ('" . $this->product . "', '" . $this->shoppingCart . "', '{$this->purchasedAmount}');";
    }

    public function consultarByIdCart($cart)
    {
        return "SELECT id_purchased_product,fk_product,fk_shopping_cart,purchased_amount,created_at FROM purchased_products WHERE fk_shopping_cart = " . $cart;
    }


}