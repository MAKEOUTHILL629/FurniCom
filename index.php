<?php
require_once './logic/Product.php';


$product = new Product();
$products = $product->consultAllByOrderName();



foreach ($products as $var){
    echo $var->getName();
    echo "<br/>";
    echo $var->getDescription();
    echo "<br/>";
    echo $var->getStock();
    echo "<br/>";
    echo $var->getPrice();
    echo "<br/>";
    echo $var->getCategory()->getName();
    echo "<br/>";
}