<?php

require_once "logics/Product.php";
require_once "logics/ProductPicture.php";


if (isset($_GET["sesion"]) && $_GET["sesion"] == "false") {
  $_SESSION["id"] = "";
}
$pid = "";
if (isset($_GET["pid"])) {
  $pid = base64_decode($_GET["pid"]);
}

require_once "presentation/layouts/head.php";
require_once "presentation/layouts/header.php";

$pagSinSesion = array(
  "presentation/product.php",
  "presentation/shop.php"
);


if ($pid != "" && (in_array($pid, $pagSinSesion) || (isset($_SESSION["id"]) && $_SESSION["id"] != ""))) {
  include $pid;
} else {
  include "presentation/home.php";
}

require_once "presentation/layouts/scripts.php" 

?>