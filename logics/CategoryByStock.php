<?php

require_once 'persistence/Connection.php';
require_once 'persistence/CategoryByStockDAO.php';

class CategoryByStock
{
    private $nameCategory;
    private $stock;
    private $connection;
    private $categoryByStockDAO;

    /**
     * @param $nameCategory
     * @param $stock
     */
    public function __construct($nameCategory = "", $stock = "")
    {
        $this->nameCategory = $nameCategory;
        $this->stock = $stock;
        $this->connection = new Connection();
        $this->categoryByStockDAO = new CategoryByStockDAO($nameCategory, $stock);
    }

    public function consultAllCategoriesWithName()
    {
        $this->connection->openConnection();
        $this->connection->execute($this->categoryByStockDAO->consultCategoryAndName());
        $categoriesStocks = array();
        while (($result = $this->connection->extract()) != null) {


            array_push($categoriesStocks, new CategoryByStock($result[0], $result[1]));
        }
        $this->connection->close();
        return $categoriesStocks;
    }

    /**
     * @return mixed|string
     */
    public function getNameCategory()
    {
        return $this->nameCategory;
    }

    /**
     * @return mixed|string
     */
    public function getStock()
    {
        return $this->stock;
    }


}