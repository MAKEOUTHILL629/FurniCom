<?php

$product = new Product();
$products = $product->consultRand();
?>

<div class="owl-carousel owl-gallery">
    <?php
    $consultImages = new ProductPicture();
    foreach ($products as $item) {
        $images = $consultImages->consultByProduct($item->getIdProduct());
        ?>
        <div class="cont-owl d-flex w-100 justify-content-center">
            <div class="card mt-3 shadow">
                <div class="position-relative">
                    <img src="<?php echo $images[0]->getPath() ?>" class="card-img-top owl-img" alt="...">
                    <span class="category-span shadow-sm">
            <div class="triangle-top-right"></div>
            <?php echo $item->getCategory()->getName() ?>
          </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-color-1 py-2"><?php echo $item->getName() ?></h5>
                    <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                        <div>
                            <small class="fst-italic text-muted">Precio Oferta:</small>
                            <p class="carousel-price m-0 text-muted fs-4 text-center">
                                $ <?php echo $item->getPrice() ?></p>
                        </div>
                        <a href="index.php?pid=<?php echo base64_encode("presentation/product.php") ?>&product=<?php echo $item->getIdProduct() ?>" class="btn shadow-sm common-button">¡Lo quiero!</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>