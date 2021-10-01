<?php
require_once 'persistence/Connection.php';
require_once 'persistence/PurchasedProductDAO.php';

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
    public function __construct($id = "", $product = "", $shoppingCart = "", $purchasedAmount = "", $cretedAt = "")
    {
        $this->id = $id;
        $this->product = $product;
        $this->shoppingCart = $shoppingCart;
        $this->purchasedAmount = $purchasedAmount;
        $this->cretedAt = $cretedAt;
        $this->connection = new Connection();
        $this->purchasedProductDAO = new PurchasedProductDAO($id, $product, $shoppingCart, $purchasedAmount, $cretedAt);
    }

    public function create()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->purchasedProductDAO->create());
        $this->connection->close();

    }

    public function purshasedProduts($cartId)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->purchasedProductDAO->consultarByIdCart($cartId));
        $purchasedProducts = array();
        while (($result = $this->connection->extract()) != null) {
            array_push($purchasedProducts, new PurchasedProduct($result[0], $result[1], $result[2], $result[3]));
        }
        $this->connection->close();
        return $purchasedProducts;
    }

    public function consultRepeatProduct(){
        $this->connection->openConnection();
        $this->connection->execute($this->purchasedProductDAO->consultByCartActive());
        $result = $this->connection->extract();

        return $result[0];
    }

    public function increaseAmount($amount, $idPurshaed){
        $this->connection->openConnection();
        $this->connection->execute($this->purchasedProductDAO->increaseQuantity($amount, $idPurshaed));
        $this->connection->close();
    }



    public function consult($idPurshased){

        $this->connection->openConnection();
        $this->connection->execute($this->purchasedProductDAO->consult($idPurshased));
        $result = $this->connection->extract();
        $this->id = $result[0];
        $this->product = $result[1];
        $this->shoppingCart = $result[2];
        $this->purchasedAmount = $result[3];
        $this->cretedAt = $result[4];
        $this->purchasedProductDAO = new PurchasedProductDAO($result[0], $result[1], $result[2], $result[3], $result[4]);
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
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return mixed|string
     */
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * @return mixed|string
     */
    public function getPurchasedAmount()
    {
        return $this->purchasedAmount;
    }

    /**
     * @return mixed|string
     */
    public function getCretedAt()
    {
        return $this->cretedAt;
    }


}