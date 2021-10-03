<?php


if (isset($_SESSION["id"])) {
    $consumer = $_SESSION["id"];
    $shoppingCart = new ShoppingCart();
    $result = $shoppingCart->consultarByConsumerAndNotPayment($consumer);


    if (isset($result)) {
        $purchase = new PurchasedProduct();
        $purchases = $purchase->purshasedProduts($result);

        $product = new Product();
        $cantidadProductoExistente = false;
        foreach ($purchases as $var) {
            $product = new Product($var->getProduct());
            $product->consult();

            if ($product->getStock() < $var->getPurchasedAmount()) {
                $cantidadProductoExistente = true;
            }
        }

        if (!$cantidadProductoExistente) {

            foreach ($purchases as $var) {
                $product = new Product($var->getProduct());
                $product->consult();
                $product->susbtractStock($var->getPurchasedAmount());
            }

        }


    }

}

