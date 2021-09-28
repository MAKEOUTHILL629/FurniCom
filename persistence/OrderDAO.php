<?php


class OrderDAO
{
    private $id;
    private $shoppingCart;
    private $invoicePath;
    private $totalPurchase;
    private $payment;
    private $createAt;
    private $updateAt;

    /**
     * @param $id
     * @param $shoppingCart
     * @param $invoicePath
     * @param $totalPurchase
     * @param $payment
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($id="", $shoppingCart="", $invoicePath="", $totalPurchase="", $payment="", $createAt="", $updateAt="")
    {
        $this->id = $id;
        $this->shoppingCart = $shoppingCart;
        $this->invoicePath = $invoicePath;
        $this->totalPurchase = $totalPurchase;
        $this->payment = $payment;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
    }


}