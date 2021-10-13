<?php

if (isset($_GET["product"])) {
    $product = new Product($_GET["product"]);
}

$product->consult();
$picture = new ProductPicture();
$images = $picture->consultByProduct($product->getIdProduct());


?>

<div class="decorate-line-2"></div>
<main id="shop-main" class="shadow position-relative overflow">
    <button id="btn-toggle" class="btn rounded"><i class="fas fa-angle-double-up"></i></button>
    <div class="container-fluid h-100 px-2">
        <div class="row justify-content-center align-items-center shadow-sm pt-3 mb-3 bg-sec">
            <h3 class="text-center text-white">Sillas <img src="presentation/img/icons/silla.svg" class="furniture-icon"
                                                           alt="icon_silla"></h3>
        </div>
        <div class="container">
            <div class="row justify-content-around pt-3">
                <div class="col-12 col-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-8">
                            <div class="owl-carousel owl-product w-100">

                                <?php

                                foreach ($images as $img) {
                                    ?>
                                    <div class="border shadow-sm rounded w-100 ">
                                        <img src="<?php echo $img->getPath() ?>" data-hash="<?php echo $img->getId() ?>"
                                             class="w-100 h-100"
                                             alt="">
                                    </div>

                                    <?php
                                }

                                ?>

                                <!--                <div class="border shadow-sm rounded product-img">-->
                                <!--                  <img src="presentation/img/products/photo_1.jpg" data-hash="two" class="w-100 h-100" alt="">-->
                                <!--                </div>-->
                                <!--                <div class="border shadow-sm rounded product-img">-->
                                <!--                  <img src="presentation/img/products/photo_2.jpg" data-hash="three" class="w-100 h-100" alt="">-->
                                <!--                </div>-->
                            </div>
                        </div>
                        <div id="buttons-owl" class="col-3 pb-5">


                            <?php

                            foreach ($images as $img) {
                                ?>
                                <div class="border shadow-sm rounded mb-3">
                                    <a href="#<?php echo $img->getId() ?>"><img class="img-fluid"
                                                                                src="<?php echo $img->getPath() ?>"
                                                                                alt=""></a>
                                </div>

                                <?php
                            }

                            ?>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 position-relative" style="z-index:1">
                    <div class="px-5 py-4 shadow rounded">
                        <h4 class="font-quik fw-bold"><?php echo $product->getName() ?><i
                                    class="fas fa-truck-loading ps-3"></i></h4>
                        <small class="text-muted fst-italic">REF: <?php echo $product->getIdProduct() ?></small>
                        <hr>
                        <h5 class="font-quik text-muted fw-bold pt-1 pb-3">Características</h5>
                        <p class="font-quik text-muted"><?php echo $product->getDescription() ?></p>
                        <div class="d-flex">
                            <h5 class="fw-bold font-quik text-muted pt-1">Precio: </h5>
                            <div class="ps-3">
                                <h4 class="fw-bold font-quik" style="color: var(--color-5);">
                                    $ <?php echo $product->getPrice() ?></h4>
                                <p class="font-quik text-muted" style="text-align:justify">Impuestos incluidos <b>Gastos
                                        de envío</b> calculados en la caja, finalizando la compra se contactará un
                                    asesor contigo para calcular el valor del envío según destino.</p>
                            </div>
                        </div>
                        <div class="d-flex w-100 py-3">
                            <div class="d-flex justify-content-start w-100 align-items-center ">
                                <h5 class="fw-bold font-quik text-muted pe-4">Cantidad: </h5>
                                <div class="input-group" style="max-width:110px">
                                    <button id="plus" class="btn quantity-btn" style="max-height:30px;">+</button>
                                    <input id="input_cantidad" type="text" style="max-height:30px;" min="1"
                                           max="<?php echo $product->getStock() ?>"
                                           class="form-control m-0" value="1">
                                    <button id="substract" class="btn quantity-btn" style="max-height:30px;">-</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center w-100">
                            <button class="btn common-button"
                                    style="font-size:0.8rem !important; width:100% !important;"
                                    onclick="enviarCantidad()"
                                <?php

                                if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {
                                    ?>
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    <?php
                                }
                                ?>

                            >Agregar al Carrito

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const cantidad = document.getElementById('input_cantidad');

        function enviarCantidad() {
            <?php

            if(isset($_SESSION["id"]) && $_SESSION["id"] != ""){
            ?>

            let url = 'index.php?pid=<?php echo base64_encode('controllers/addProductCart.php')?>&idProduct=<?php echo $product->getIdProduct() ?>&amount=' + cantidad.value;
            window.location.replace(url);
            <?php
            }

            ?>


        }


    </script>
    <section id="carousel" class="pt-1 position-relative">
        <h2 class="main-subtitle" style="color:var(--color-5)">¿Te motiva algo nuevo?</h2>
        <div class="bg-pr">
            <?php require_once "presentation/layouts/owl.php" ?>
        </div>
    </section>
    </div>
    <?php require_once "presentation/layouts/footer.php" ?>
</main>