<?php
session_start();
require_once "logics/Product.php";
require_once "logics/ProductPicture.php";
require_once "logics/User.php";
require_once "logics/ShoppingCart.php";
require_once "logics/PurchasedProduct.php";
require_once "logics/Order.php";

$pid = "";
$sid = "";
$action = "";
$context = "";

if (isset($_GET["sid"])) {
    switch (base64_decode($_GET["sid"])) {
        case "user_form":
            $action = "presentation/platform/layouts/userForm.php";
            $context = "Formulario";
            break;
        case "product_form":
            $action = "presentation/platform/layouts/productForm.php";
            $context = "Formulario";
            break;

        case "users_table":
            $action = "presentation/platform/layouts/userTable.php";
            $context = "Tabla de Información";
            break;
        case "orders_table":
            $action = "presentation/platform/layouts/orderTable.php";
            $context = "Tabla de Información";
            break;
        case "products_table":
            $action = "presentation/platform/layouts/productTable.php";
            $context = "Tabla de Información";
            break;

        case "user_show":
            $action = "presentation/platform/layouts/userShow.php";
            $context = "Vista de Item";
            break;
        case "product_show":
            $action = "presentation/platform/layouts/productShow.php";
            $context = "Vista de Item";
            break;
    };
}

if (isset($_GET["sesion"]) && $_GET["sesion"] == "false") {
    $_SESSION["id"] = "";
}

if (isset($_GET["pid"])) {
    $pid = base64_decode($_GET["pid"]);
}

if (isset($_GET["sid"])) {
    $sid = base64_decode($_GET["sid"]);
    require_once "presentation/platform/layouts/head.php";
} else {
    require_once "presentation/layouts/head.php";
    include "presentation/layouts/header.php";
}

$pagSinSesion = array(
    "presentation/product.php",
    "presentation/shop.php",
    'controllers/authenticate.php',
    'controllers/addProductCart.php'
);

if ($pid != "" && (in_array($pid, $pagSinSesion) || (isset($_SESSION["id"]) && $_SESSION["id"] != ""))) {
    include $pid;
} else if ($sid == "") {
    include "presentation/home.php";
}

if ($sid) {
    include "presentation/platform/blank.php";
} else if ($pid == "") {
    include "presentation/platform/dashboard.php";
}

if (!isset($_GET["sid"])) {
    require_once "presentation/layouts/scripts.php";
} else {
    require_once "presentation/platform/layouts/scripts.php";
}
