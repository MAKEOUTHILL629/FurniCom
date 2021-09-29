<?php


class ProductDAO
{
    private $idProducto;
    private $categoria;
    private $name;
    private $description;
    private $stock;
    private $price;
    private $createAt;
    private $updateAt;

    /**
     * ProductDAO constructor.
     * @param $idProducto
     * @param $categoria
     * @param $name
     * @param $description
     * @param $stock
     * @param $price
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($idProducto = "", $categoria = "", $name = "", $description = "", $stock = "", $price = "", $createAt = "", $updateAt = "")
    {
        $this->idProducto = $idProducto;
        $this->categoria = $categoria;
        $this->name = $name;
        $this->description = $description;
        $this->stock = $stock;
        $this->price = $price;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
    }

    public function create()
    {
        return "insert into producto (nombre,fk_category, description, stock, price)
                values (
                '" . $this->nombre . "',
                '" . $this->categoria . "',
                '" . $this->description . "',
                '" . $this->stock . "',
                '" . $this->price . "'
                )";
    }


    public function consult()
    {
        return "SELECT id_product,fk_category,name,description,stock,price,created_at,updated_at
                FROM products  
                WHERE id_product  = '" . $this->idProducto . "'";
    }


    public function consultAllByAtributteAndAddressAndRowsAndPage($attribute, $address, $rows, $page)
    {
        return "SELECT id_product,fk_category,name,description,stock,price,created_at,updated_at
                FROM products " .
            (($attribute != "" && $address != "") ? "order by " . $attribute . " " . $address : "") .
            " limit " . (($page - 1) * $rows) . ", " . $rows;
    }

    public function consultAllByOrderName()
    {
        return "SELECT id_product,fk_category,name,description,stock,price,created_at,updated_at
                from products 
                order by name";
    }

    public function consultNumberOfRecords()
    {
        return "SELECT count(1) 
                FROM products";
    }

    public function consultFilter($filter)
    {
        return "select id_product,fk_category,name,description,stock,price,created_at,updated_at
                from products 
                where name like '" . $filter . "%'";
    }

    public function consultRandom()
    {
        return "SELECT id_product,fk_category,name,description,stock,price,created_at,updated_at
                from products 
                ORDER BY RAND() LIMIT 6";
    }

    public function consultByCategory($category)
    {
        return "SELECT id_product,fk_category,products.name,description,stock,price,products.created_at,products.updated_at FROM products 
                LEFT JOIN categories ON products.fk_category = categories.id_category WHERE categories.name = '" . $category . "'";
    }


}