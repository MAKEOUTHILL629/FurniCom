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
    private $status;
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
    public function __construct($id = "", $consumer = "", $createAt = "", $updateAt = "", $purchasedProducts = "", $subTotal = "", $status = "")
    {
        $this->id = $id;
        $this->consumer = $consumer;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->purchasedProducts = $purchasedProducts;
        $this->subTotal = $subTotal;
        $this->status = $status;

        $this->connection = new Connection();
        $this->shopingCartDAO = new ShoppingCartDAO($id, $consumer, $createAt, $updateAt, $purchasedProducts, $subTotal);
    }

    public function create()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->shopingCartDAO->create());
        $this->connection->close();
    }

    public function consultShopingCart()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->shopingCartDAO->consultById());
        $result = $this->connection->extract();
        $this->id = $result[0];
        $consumer = new User($result[1]);
        $consumer->consultUser();
        $this->consumer = $consumer;
        $this->createAt = $result[2];
        $this->updateAt = $result[3];
        $this->purchasedProducts = $result[4];
        $this->subTotal = $result[5];
        $this->status = $result[6];

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

    /**
     * @return mixed|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getConsumer()
    {
        return $this->consumer;
    }

    /**
     * @return mixed|string
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @return mixed|string
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @return mixed|string
     */
    public function getPurchasedProducts()
    {
        return $this->purchasedProducts;
    }

    /**
     * @return mixed|string
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * @return mixed|string
     */
    public function getStatus()
    {
        return $this->status;
    }


}