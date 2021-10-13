<?php
require_once 'persistence/Connection.php';
require_once 'persistence/ShoppingCartDAO.php';


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

    public function create()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->shopingCartDAO->create());
        $this->connection->close();
    }

    public function consultByConsumerAndNotPayment($consumer)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->shopingCartDAO->consultCartWithoutPayment($consumer));
        $result = $this->connection->extract();
        return $result === null ? 0 : $result[0];


    }

    public function updateStatusCartDisable()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->shopingCartDAO->updateStatusCartDisable());
        $this->connection->close();
    }


}