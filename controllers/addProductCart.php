<?php

if ($_GET["idProduct"] && $_SESSION["id"] && $_GET["amount"]) {
    $consumer = $_SESSION["id"];
    $idProduct = $_GET["idProduct"];
    $amount = $_GET["amount"];
    $shoppingCart = new ShoppingCart();
    $result = $shoppingCart->consultByConsumerAndNotPayment($consumer);

    $product = new Product($idProduct);
    $product->consult();

    if($product->getStock() >= $amount){
        if (isset($result)) {
            $purchase = new PurchasedProduct("", $idProduct, $result, $amount);
            $resultExists = $purchase->consultRepeatProduct();

            if(isset($resultExists)){

                $purchase->consult($resultExists);
                if($purchase->getPurchasedAmount() + $amount <= $product->getStock()){
                    $purchase->increaseAmount($amount, $resultExists);
                }
            }else{
                $purchase->create();
            }
        }
    }else{

    }

    ?>
    <script>
        window.location.replace('index.php?pid=<?php echo base64_encode("presentation/product.php") ?>&product=<?php echo$_GET["idProduct"] ?>');
    </script>

    <?php

}
?>