<?php
session_start();
require_once "logics/Product.php";
require_once "logics/ProductPicture.php";
require_once "logics/User.php";
require_once "logics/ShoppingCart.php";
require_once "logics/PurchasedProduct.php";
require_once "logics/Order.php";


if (isset($_GET["sesion"]) && $_GET["sesion"] == "false") {
    $_SESSION["id"] = "";
}

$pid = "";
if (isset($_GET["pid"])) {
    $pid = base64_decode($_GET["pid"]);
}

$sid = "";
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

$pagConSesion = array(
    "presentation/platform/dashboard.php",
    "presentation/platform/forms.php",
    "presentation/platform/show.php",
    "presentation/platform/tables.php"
);


if ($pid != "" && (in_array($pid, $pagSinSesion) || (isset($_SESSION["id"]) && $_SESSION["id"] != ""))) {
    include $pid;
} else if ($sid == "") {
    include "presentation/home.php";
}

if ($sid != "" && (in_array($sid, $pagConSesion) || (isset($_SESSION["id"]) && $_SESSION["id"] != ""))) {
    include $sid;
} else if ($pid == "") {
    include "presentation/platform/dashboard.php";
}

if (!isset($_GET["sid"])) {
    require_once "presentation/layouts/scripts.php";
} else {
    require_once "presentation/platform/layouts/scripts.php";
}
