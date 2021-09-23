<?php


class ProductPictureDAO
{
    private $id;
    private $product;
    private $path;

    /**
     * @param $id
     * @param $product
     * @param $path
     */
    public function __construct($id = "", $product = "", $path = "")
    {
        $this->id = $id;
        $this->product = $product;
        $this->path = $path;
    }

    /**
     * @param mixed|string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }


    public function create()
    {
        return "INSERT INTO product_pictures (fk_product, path) VALUES ('" . $this->product . "', '" . $this->path . "')";
    }

    public function consultByIdProduct($idProduct)
    {
        return "SELECT id_product_picture,fk_product,path FROM product_pictures
                WHERE fk_product = " . $idProduct;
    }

    public function consult()
    {
        return "SELECT id_product_picture,fk_product,path FROM product_pictures
                WHERE id_product_picture = " . $this->id;
    }


}