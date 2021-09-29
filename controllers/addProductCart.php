<?php

if ($_GET["idProduct"] && $_GET["idUser"] && $_GET["amount"]) {
    $consumer = $_GET["idUser"];
    $idProduct = $_GET["idProduct"];
    $amount = $_GET["amount"];
    $shoppingCart = new ShoppingCart();
    $result = $shoppingCart->consultarByConsumerAndNotPayment($consumer);

    if (isset($result)) {
        $purchase = new PurchasedProduct("", $idProduct, $result, $amount);
        $purchase->create();
    }

    ?>
    <script>
        window.location.replace('index.php');
    </script>

    <?php

}
?>