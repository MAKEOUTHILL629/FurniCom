<?php
require_once 'persistence/Connection.php';
require_once 'persistence/OrderDAO.php';


class Order
{
    private $id;
    private $shoppingCart;
    private $invoicePath;
    private $totalPurchase;
    private $payment;
    private $createAt;
    private $updateAt;
    private $connection;
    private $orderDAO;

    /**
     * @param $id
     * @param $shoppingCart
     * @param $invoicePath
     * @param $totalPurchase
     * @param $payment
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($id, $shoppingCart, $invoicePath, $totalPurchase, $payment, $createAt, $updateAt)
    {
        $this->id = $id;
        $this->shoppingCart = $shoppingCart;
        $this->invoicePath = $invoicePath;
        $this->totalPurchase = $totalPurchase;
        $this->payment = $payment;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->connection = new Connection();
        $this->orderDAO = new OrderDAO($id, $shoppingCart, $invoicePath, $totalPurchase, $payment, $createAt, $updateAt);
    }


    public function create()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->orderDAO->create());
        $this->connection->close();
    }

}