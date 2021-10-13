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
    public function __construct($id = "", $shoppingCart = "", $invoicePath = "", $totalPurchase = "", $payment = "", $createAt = "", $updateAt = "")
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

    public function consultAll()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->orderDAO->consultAll());
        $orders = array();
        while (($result = $this->connection->extract()) != null) {
            $cart = new ShoppingCart($result[1]);
            $cart->consultShopingCart();

            array_push($orders, new Order($result[0], $cart, $result[2], $result[3], $result[4], $result[5], $result[6]));
        }
        $this->connection->close();
        return $orders;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * @return mixed
     */
    public function getInvoicePath()
    {
        return $this->invoicePath;
    }

    /**
     * @return mixed
     */
    public function getTotalPurchase()
    {
        return $this->totalPurchase;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }


}