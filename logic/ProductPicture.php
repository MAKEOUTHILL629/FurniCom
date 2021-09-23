<?php
require_once 'percistence/Connection.php';
require_once 'percistence/ProductPictureDAO.php';

class ProductPicture{
    private $id;
    private $product;
    private $path;
    private $connection;
    private $productPictureDAO;
    /**
     * @param $id
     * @param $product
     * @param $path
     */
    public function __construct($id="", $product="", $path="")
    {
        $this->id = $id;
        $this->product = $product;
        $this->path = $path;
        $this->connection = new Connection();
        $this->productPictureDAO = new ProductPictureDAO($id, $product, $path);
    }

    public function create(){
        $this->connection->openConnection();
        $this->connection->execute($this->productPictureDAO->create());
        $this->connection->close();
    }

    public function consultByProduct($idProduct){
        $this->connection->openConnection();
        $this->connection->execute($this->productPictureDAO->consultByIdProduct($idProduct));
        $images = array();
        while(($result = $this->connection->extract()) != null){
            array_push($images, new ProductPicture($result[0],$result[1], $result[2] ));
        }
        $this->connection->close();
        return $images;
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
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed|string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }





}