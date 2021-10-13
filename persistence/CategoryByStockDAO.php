<?php

class CategoryByStockDAO
{
    private $nameCategory;
    private $stock;

    /**
     * @param $nameCategory
     * @param $stock
     */
    public function __construct($nameCategory, $stock)
    {
        $this->nameCategory = $nameCategory;
        $this->stock = $stock;
    }


    public function consultCategoryAndName()
    {
        return "SELECT ca.name, pr.stock FROM categories as ca LEFT JOIN products as pr ON pr.fk_category = ca.id_category";
    }

}