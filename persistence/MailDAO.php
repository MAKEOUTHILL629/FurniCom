<?php


class MailDAO
{
    private $receiver;
    private $invoice;
    private $total;
    private $products;

    /**
     * @param $id
     * @param $shoppingCart
     * @param $invoicePath
     * @param $totalPurchase
     * @param $payment
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($receiver = "", $invoice = "", $total = "", $products = "")
    {
        $this->receiver = $receiver;
        $this->invoice = $invoice;
        $this->total = $total;
        $this->products = $products;
    }

    public function getInfo($cart)
    {
        return "SELECT b.name AS 'producto', a.purchased_amount as 'cantidad', b.price as 'precio', 
        (b.price * a.purchased_amount) as 'total', CONCAT(d.lastnames,' ',d.first_names) as 'name', d.email as 'email'
        FROM purchased_products as a  
        INNER JOIN products as b ON b.id_product = a.fk_product
        INNER JOIN shopping_carts as c ON c.id_shopping_cart = a.fk_shopping_cart
        INNER JOIN users as d ON d.id_user = c.fk_consumer
        WHERE fk_shopping_cart = $cart;";
    }


}