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
    public function __construct($idProducto = "", $categoria = "", $name = "", $description = "", $stock = "", $price = "", $createAt = "", $updateAt = "" )
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
        return "insert into producto (nombre, precio, cantidad, administrador_idadministrador, marca_idmarca, tipoproducto_idtipoproducto)
                values (
                '" . $this->idProducto . "',
                '" . $this->categoria . "',
                '" . $this->description . "',
                '" . $this->stock . "',
                '" . $this->price . "'
                )";
    }


    public function consult()
    {
        return "SELECT id_product, fk_category, name, description, stock, price, created_at, updated_at
                FROM products 
                WHERE id_product = '" . $this->idProducto . "'";
    }


    public function consultAll($attribute, $address, $rows, $page)
    {
        return "SELECT id_product, fk_category, name, description, stock, price, created_at, updated_at
                FROM products " .
            (($attribute != "" && $address != "") ? "order by " . $attribute . " " . $address : "") .
            " limit " . (($page - 1) * $rows) . ", " . $rows;
    }

    public function consultNumberOfRecords()
    {
        return "SELECT count(1) 
                FROM products";
    }

    public function consultFilter($filtro)
    {
        return "select idProducto, nombre, precio, cantidad, imagen, administrador_idadministrador, marca_idmarca, tipoproducto_idtipoproducto
                from producto 
                where nombre like '" . $filtro . "%'";
    }


}