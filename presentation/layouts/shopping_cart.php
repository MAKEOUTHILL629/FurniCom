<?php
if (isset($_SESSION["id"]) && $_SESSION["id"] != 0) {
    $idConsumer = $_SESSION["id"];
    $shoppingCart = new ShoppingCart();
    $result = $shoppingCart->consultByConsumerAndNotPayment($idConsumer);

    if (isset($result) && $result != 0) {
        $purchase = new PurchasedProduct();
        $purchases = $purchase->purshasedProduts($result);

    }
}
?>
<div class="modal fade" id="shopping_cart" tabindex="-1" aria-labelledby="shopping_cart" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content h-100 position-relative">
            <div class="decorate-line top-50 start-50 translate-middle" style="z-index:1 !important;"></div>
            <div class="modal-header" style="border:0;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex align-items-center justify-content-center" style="z-index: 2 !important;">
                <i class="fas fa-shopping-cart text-white pb-2" style="font-size:4rem;"></i>
            </div>
            <h2 class="main-subtitle pt-0">¡Veamos las compras!</h2>
            <div class="modal-body position-relative px-5 mb-4 py-0 bg-white" style="z-index:2 !important;">
                <?php if (isset($_SESSION["id"]) && isset($purchases)) { ?>
                    <div class="px-5 py-4 shadow rounded">
                        <div class="container">
                            <div class="row justify-content-center">


                                <?php

                                $sumSubTotal = 0;
                                foreach ($purchases as $var) {
                                    $product = new Product($var->getProduct());
                                    $product->consult();
                                    $sumSubTotal += $product->getPrice() * $var->getPurchasedAmount();

                                    $picture = new ProductPicture();
                                    $images = $picture->consultByProduct($product->getIdProduct());
                                    ?>
                                    <div class="col-5">
                                        <div class="row">
                                            <h4 class="font-quik fw-bold w-auto"><?php echo $product->getName() ?> <i
                                                        class="fas fa-truck-loading ps-3"></i></h4>
                                            <small class="text-muted fst-italic">REF: <?php echo $product->getIdProduct() ?></small>
                                            <div class="d-flex pt-3">
                                                <h5 class="fw-bold font-quik text-muted">Precio: </h5>
                                                <div class="ps-3">
                                                    <h4 class="fw-bold font-quik" style="color: var(--color-5);">
                                                        $<?php echo $product->getPrice() ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex w-100 py-3">
                                            <div class="d-flex justify-content-start w-100 align-items-center ">
                                                <h5 class="fw-bold font-quik text-muted pe-4">Cantidad: </h5>
                                                <div class="input-group" style="max-width:80px">
                                                    <input id="modal_cantidad" type="text" style="max-height:50px;"
                                                           min="1"
                                                           max="100" class="form-control m-0"
                                                           value="<?php echo $var->getPurchasedAmount() ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-4">
                                        <div class="shadow-sm rounded mb-3">
                                            <a href="#three"><img class="img-fluid"
                                                                  src="<?php echo $images[0]->getPath() ?>"
                                                                  alt=""></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php
                                }
                                ?>

                                <div>
                                    <h2> El Subtotal es : $<?php echo $sumSubTotal ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="index.php?pid=<?php echo base64_encode('controllers/makePurchase.php') ?>"
                               class="btn common-button rounded submit h-100 px-3">Comprar</a>
                        </div>


                    </div>
                <?php } ?>
            </div>
            <div class="modal-footer justify-content-center bg-light" style="z-index:3 !important">
                <p class="text-muted">¡FurniCom para todos!</p>
            </div>
        </div>
    </div>
</div>