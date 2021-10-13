<?php
require_once 'persistence/Connection.php';
require_once 'persistence/ProductDAO.php';
require_once 'Category.php';


class Product
{
    private $idProduct;
    private $name;
    private $description;
    private $stock;
    private $price;
    private $category;
    private $createdAt;
    private $updateAt;
    private $connection;
    private $productDAO;

    /**
     * @param $idProduct
     * @param $name
     * @param $description
     * @param $stock
     * @param $price
     * @param $category
     * @param $createdAt
     * @param $updateAt
     */
    public function __construct($idProduct = "", $name = "", $description = "", $stock = "", $price = "", $category = "", $createdAt = "", $updateAt = "")
    {
        $this->idProduct = $idProduct;
        $this->name = $name;
        $this->description = $description;
        $this->stock = $stock;
        $this->price = $price;
        $this->category = $category;
        $this->createdAt = $createdAt;
        $this->updateAt = $updateAt;
        $this->connection = new Connection();
        $this->productDAO = new ProductDAO($idProduct, $category, $name, $description, $stock, $price, $createdAt, $updateAt);

    }

    public function create()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->create());
        $this->connection->close();
    }


    public function consult()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consult());
        $result = $this->connection->extract();
        $category = new Category($result[1]);
        $category->consult();
        $this->name = $result[2];
        $this->description = $result[3];
        $this->stock = $result[4];
        $this->price = $result[5];
        $this->createdAt = $result[6];
        $this->updateAt = $result[7];
        $this->category = $category;
        $this->productDAO = new ProductDAO($this->idProduct, $this->category->getId(), $this->name, $this->description, $this->stock, $this->price, $this->createdAt, $this->updateAt);
        $this->connection->close();
    }

    public function consultIdLastCreated()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consultIdLastCreated());
        $result = $this->connection->extract();
        $this->connection->close();
        return $result[0];
    }


    public function consultarTodosByParameters($atributte, $direction, $rows, $pag)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consultAllByAtributteAndAddressAndRowsAndPage($atributte, $direction, $rows, $pag));
        $products = array();
        while (($result = $this->connection->extract()) != null) {
            $category = new Category($result[1]);
            $category->consult();
            array_push($products, new Product($result[0], $result[2], $result[3], $result[4], $result[5], $category, $result[6], $result[7]));
        }
        $this->connection->close();
        return $products;
    }

    public function consultCountRows()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consultNumberOfRecords());
        return $this->connection->extract()[0];
    }

    public function consultByFilter($filter)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consultFilter($filter));
        $products = array();
        while (($result = $this->connection->extract()) != null) {
            $category = new Category($result[1]);
            $category->consult();
            array_push($products, new Product($result[0], $result[2], $result[3], $result[4], $result[5], $category, $result[6], $result[7]));
        }
        $this->connection->close();
        return $products;
    }

    public function consultAllByOrderName()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consultAllByOrderName());
        $products = array();
        while (($result = $this->connection->extract()) != null) {
            $category = new Category($result[1]);
            $category->consult();
            array_push($products, new Product($result[0], $result[2], $result[3], $result[4], $result[5], $category, $result[6], $result[7]));
        }
        $this->connection->close();
        return $products;
    }

    public function consultRand()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consultRandom());
        $products = array();
        while (($result = $this->connection->extract()) != null) {
            $category = new Category($result[1]);
            $category->consult();
            array_push($products, new Product($result[0], $result[2], $result[3], $result[4], $result[5], $category, $result[6], $result[7]));
        }
        $this->connection->close();
        return $products;
    }


    public function consultByCategory($category)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->consultByCategory($category));
        $products = array();
        while (($result = $this->connection->extract()) != null) {
            $category = new Category($result[1]);
            $category->consult();
            array_push($products, new Product($result[0], $result[2], $result[3], $result[4], $result[5], $category, $result[6], $result[7]));
        }
        $this->connection->close();
        return $products;
    }

    public function susbtractStock($amount)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->productDAO->substractStock($amount));
        $this->connection->close();
    }


    /**
     * @return mixed|string
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed|string
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @return mixed|string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed|string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return mixed|string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return mixed|string
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed|string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed|string $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @param mixed|string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed|string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param mixed|string $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;
    }


}


