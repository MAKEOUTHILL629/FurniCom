<?php


if (isset($_SESSION["id"])) {
    $consumer = $_SESSION["id"];
    $shoppingCart = new ShoppingCart();
    $result = $shoppingCart->consultByConsumerAndNotPayment($consumer);


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
            $totalValue = 0;
            foreach ($purchases as $var) {
                $product = new Product($var->getProduct());
                $product->consult();
                $totalValue += $var->getPurchasedAmount() + $product->getPrice();
                $product->susbtractStock($var->getPurchasedAmount());
            }

            $order = new Order("", $result, "", $totalValue, 0, "", "");
            $order->create();


            $cart = new ShoppingCart($result);
            $cart->updateStatusCartDisable();


        }


    }

}

