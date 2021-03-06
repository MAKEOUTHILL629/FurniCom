<?php
require_once 'logics/Product.php';
require_once 'logics/ProductPicture.php';

$category = "Sofas";
if (isset($_GET["category"])) {
  $category = $_GET["category"];
}

$product = new Product();
$products = $product->consultByCategory($category);

?>

<div class="decorate-line-2"></div>
<main id="shop-main" class="shadow position-relative overflow">
  <button id="btn-toggle" class="btn rounded"><i class="fas fa-angle-double-up"></i></button>
  <div class="decorate-line-3 top-50 start-50 translate-middle"></div>
  <div class="container-fluid h-100 px-2">
    <div class="row justify-content-center align-items-center shadow-sm pt-3 mb-3 bg-sec">
      <h3 class="text-center text-white">Sillas <img src="presentation/img/icons/silla.svg" class="furniture-icon" alt="icon_silla"></h3>
    </div>
    <div class="row">
      <?php require_once "presentation/layouts/filters.php" ?>
      <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-1 order-md-2">
        <div class="row justify-content-center pt-3 bg-pr h-100 rounded shadow">
          <div class="row">


            <?php
            $consultImages = new ProductPicture();
            foreach ($products as $item) {
              $images = $consultImages->consultByProduct($item->getIdProduct());
            ?>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="card item-shop">
                  <a href="index.php?pid=<?php echo base64_encode("presentation/product.php") ?>&product=<?php echo $item->getIdProduct() ?>"><img src="<?php echo $images[0]->getPath() ?>" class="img-fluid" alt="..."></a>
                  <div class="card-body">
                    <h6 class="card-title text-color-1 py-2"><?php echo $item->getName() ?></h6>
                    <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                      <div>
                        <small class="fst-italic text-muted">Precio Oferta:</small>
                        <p class="carousel-price m-0 text-muted fs-5 text-center">$
                          <?php echo $item->getPrice() ?></p>
                      </div>
                      <div>
                        <a href="index.php?pid=<?php echo base64_encode("presentation/product.php") ?>&product=<?php echo $item->getIdProduct() ?>" class="btn shadow-sm plus-button rounded-circle"><i class="fas fa-search"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <?php require_once "presentation/layouts/footer.php" ?>
</main>