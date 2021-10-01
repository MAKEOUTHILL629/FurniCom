<?php


if (isset($_SESSION["id"])) {
    $consumer = $_SESSION["id"];
    $shoppingCart = new ShoppingCart();
    $result = $shoppingCart->consultarByConsumerAndNotPayment($consumer);



    if (isset($result)) {
        $purchase = new PurchasedProduct();
        $purchases = $purchase->purshasedProduts($result);

    }

}

