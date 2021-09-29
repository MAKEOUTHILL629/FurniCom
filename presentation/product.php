<div class="decorate-line-2"></div>
<main id="shop-main" class="shadow position-relative overflow">
  <button id="btn-toggle" class="btn rounded"><i class="fas fa-angle-double-up"></i></button>
  <div class="container-fluid h-100 px-2">
    <div class="row justify-content-center align-items-center shadow-sm pt-3 mb-3 bg-sec">
      <h3 class="text-center text-white">Sillas <img src="presentation/img/icons/silla.svg" class="furniture-icon" alt="icon_silla"></h3>
    </div>
    <div class="container">
      <div class="row justify-content-around pt-3">
        <div class="col-12 col-lg-8">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-8">
              <div class="owl-carousel owl-product w-100">
                <div class="border shadow-sm rounded w-100 ">
                  <img src="presentation/img/products/photo.jpg" data-hash="one" class="w-100 h-100" alt="">
                </div>
                <div class="border shadow-sm rounded product-img">
                  <img src="presentation/img/products/photo_1.jpg" data-hash="two" class="w-100 h-100" alt="">
                </div>
                <div class="border shadow-sm rounded product-img">
                  <img src="presentation/img/products/photo_2.jpg" data-hash="three" class="w-100 h-100" alt="">
                </div>
              </div>
            </div>
            <div id="buttons-owl" class="col-3 pb-5">
              <div class="border shadow-sm rounded mb-3">
                <a href="#one"><img class="img-fluid" src="presentation/img/products/photo.jpg" alt=""></a>
              </div>
              <div class="border shadow-sm rounded mb-3">
                <a href="#two"><img class="img-fluid" src="presentation/img/products/photo_1.jpg" alt=""></a>
              </div>
              <div class="border shadow-sm rounded mb-3">
                <a href="#three"><img class="img-fluid" src="presentation/img/products/photo_2.jpg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 position-relative" style="z-index:1">
          <div class="px-5 py-4 shadow rounded">
            <h4 class="font-quik fw-bold">Sofá Cama Berlín <i class="fas fa-truck-loading ps-3"></i></h4>
            <small class="text-muted fst-italic">REF: 2090123</small>
            <hr>
            <h5 class="font-quik text-muted fw-bold pt-1 pb-3">Características</h5>
            <p class="font-quik text-muted">El sofá Berlín, ofrece comodidad y versatilidad, fabricado en espuma de poliuretano indeformable de diferentes densidades y fibras, con estructura interna de madera de pino incluye una banca auxiliar, creando una pieza ideal para descansar.</p>
            <div class="d-flex">
              <h5 class="fw-bold font-quik text-muted pt-1">Precio: </h5>
              <div class="ps-3">
                <h4 class="fw-bold font-quik" style="color: var(--color-5);">$2.730.380</h4>
                <p class="font-quik text-muted" style="text-align:justify">Impuestos incluidos <b>Gastos de envío</b> calculados en la caja, finalizando la compra se contactará un asesor contigo para calcular el valor del envío según destino.</p>
              </div>
            </div>
            <div class="d-flex w-100 py-3">
              <div class="d-flex justify-content-start w-100 align-items-center ">
                <h5 class="fw-bold font-quik text-muted pe-4">Cantidad: </h5>
                <div class="input-group" style="max-width:110px">
                  <button id="plus" class="btn quantity-btn" style="max-height:30px;">+</button>
                  <input id="input_cantidad" type="text" style="max-height:30px;" min="1" max="100" class="form-control m-0" value="1">
                  <button id="substract" class="btn quantity-btn" style="max-height:30px;">-</button>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center w-100">
              <button class="btn common-button" style="font-size:0.8rem !important; width:100% !important;">Agregar al Carrito</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="carousel" class="pt-1 position-relative">
    <h2 class="main-subtitle" style="color:var(--color-5)">¿Te motiva algo nuevo?</h2>
    <div class="bg-pr">
      <?php require_once "presentation/layouts/owl.php" ?>
    </div>
  </section>
  </div>
  <?php require_once "presentation/layouts/footer.php" ?>
</main>