<?php
require_once '../percistence/Connection.php';
require_once '../percistence/ProductDAO.php';


class Product
{
    private $idProducto;
    private $name;
    private $description;
    private $stock;
    private $price;
    private $categoria;
    private $createdAt;
    private $updateAt;
    private $connection;
    private $productDAO;

    /**
     * @param $idProducto
     * @param $name
     * @param $description
     * @param $stock
     * @param $price
     * @param $categoria
     * @param $createdAt
     * @param $updateAt
     */
    public function __construct($idProducto = "", $name = "", $description = "", $stock = "", $price = "", $categoria = "", $createdAt = "", $updateAt = "")
    {
        $this->idProducto = $idProducto;
        $this->name = $name;
        $this->description = $description;
        $this->stock = $stock;
        $this->price = $price;
        $this->categoria = $categoria;
        $this->createdAt = $createdAt;
        $this->updateAt = $updateAt;
        $this->connection = new Connection();
        $this->productDAO = new ProductDAO($idProducto, $categoria, $name, $description, $stock, $price, $createdAt, $updateAt);

    }

    public function crear()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->crear());
        $this->conexion->cerrar();
    }


    public function consultar()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->consultar());
        $resultado = $this->conexion->extraer();
        $administrador = new Administrador($resultado[5]);
        $administrador->consultar();
        $marca = new Marca($resultado[6]);
        $marca->consultar();
        $tipoproducto = new TipoProducto($resultado[7]);
        $tipoproducto->consultar();
        $this->nombre = $resultado[1];
        $this->precio = $resultado[2];
        $this->cantidad = $resultado[3];
        $this->imagen = $resultado[4];
        $this->administrador = $administrador;
        $this->marca = $marca;
        $this->tipoProducto = $tipoproducto;
    }


    public function consultarTodos($atributo, $direccion, $filas, $pag)
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->consultarTodos($atributo, $direccion, $filas, $pag));
        $productos = array();
        while (($resultado = $this->conexion->extraer()) != null) {
            $administrador = new Administrador($resultado[5]);
            $administrador->consultar();
            $marca = new Marca($resultado[6]);
            $marca->consultar();
            $tipoproducto = new TipoProducto($resultado[7]);
            $tipoproducto->consultar();
            array_push($productos, new Producto($resultado[0], $resultado[1], $resultado[2], $resultado[3], $resultado[4], $administrador, $marca, $tipoproducto));
        }
        $this->conexion->cerrar();
        return $productos;
    }

    public function consultarTotalFilas()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->consultarTotalFilas());
        return $this->conexion->extraer()[0];
    }

    public function consultarFiltro($filtro)
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->consultarFiltro($filtro));
        $productos = array();
        while (($resultado = $this->conexion->extraer()) != null) {
            $administrador = new Administrador($resultado[5]);
            $administrador->consultar();
            $marca = new Marca($resultado[6]);
            $marca->consultar();
            $tipoproducto = new TipoProducto($resultado[7]);
            $tipoproducto->consultar();
            array_push($productos, new Producto($resultado[0], $resultado[1], $resultado[2], $resultado[3], $resultado[4], $administrador, $marca, $tipoproducto));
        }
        $this->conexion->cerrar();
        return $productos;
    }

    public function editarImagen()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->editarImagen());
        $this->conexion->cerrar();
    }

}


/**
 * @return mixed
 */
public
function getIdProducto()
{
    return $this->idProducto;
}

/**
 * @param mixed $idProducto
 */
public
function setIdProducto($idProducto)
{
    $this->idProducto = $idProducto;
}

/**
 * @return mixed
 */
public
function getName()
{
    return $this->name;
}

/**
 * @param mixed $name
 */
public
function setName($name)
{
    $this->name = $name;
}

/**
 * @return mixed
 */
public
function getDescription()
{
    return $this->description;
}

/**
 * @param mixed $description
 */
public
function setDescription($description)
{
    $this->description = $description;
}

/**
 * @return mixed
 */
public
function getStock()
{
    return $this->stock;
}

/**
 * @param mixed $stock
 */
public
function setStock($stock)
{
    $this->stock = $stock;
}

/**
 * @return mixed
 */
public
function getPrice()
{
    return $this->price;
}

/**
 * @param mixed $price
 */
public
function setPrice($price)
{
    $this->price = $price;
}

/**
 * @return mixed
 */
public
function getCategoria()
{
    return $this->categoria;
}

/**
 * @param mixed $categoria
 */
public
function setCategoria($categoria)
{
    $this->categoria = $categoria;
}

/**
 * @return mixed
 */
public
function getCreatedAt()
{
    return $this->createdAt;
}

/**
 * @param mixed $createdAt
 */
public
function setCreatedAt($createdAt)
{
    $this->createdAt = $createdAt;
}

/**
 * @return mixed
 */
public
function getUpdateAt()
{
    return $this->updateAt;
}

/**
 * @param mixed $updateAt
 */
public
function setUpdateAt($updateAt)
{
    $this->updateAt = $updateAt;
}


}