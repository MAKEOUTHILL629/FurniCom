<?php require_once "presentation/layouts/head.php" ?>
<?php require_once "presentation/layouts/header.php";

require_once 'logics/Product.php';
require_once 'logics/ProductPicture.php';

?>
<main id="principal-main" class="shadow">
  <button id="btn-toggle" class="btn rounded"><i class="fas fa-angle-double-up"></i></button>
  <section id="main-img" class="d-flex align-items-end shadow">
    <h1 class="main-title w-100">¡La elegancia y la modestia adaptada a la medida!</h1>
  </section>
  <article class="position-relative shadow">
    <div class="decorate-line top-50 start-50 translate-middle"></div>
    <section id="carousel" class="pt-3 position-relative">
      <h2 class="main-subtitle">¿Te motiva algo nuevo?</h2>
      <div class="bg-pr">
        <?php require_once "presentation/layouts/owl.php" ?>
      </div>
    </section>
    <section class="pt-lg-5 pb-3 container-fluid position-relative" style="z-index:1">
      <div class="row pt-3 justify-content-center position-relative" style="z-index:2">
        <div class="col-lg-4 px-2 pt-3 position-relative order-1">
          <div class="row text-details flex-column align-items-center px-2">
            <div class="detail-cont">
              <div class="d-flex justify-content-center">
                <div class="icon-cont border shadow d-flex justify-content-center align-items-center">
                  <i class="icon-details fas fa-box"></i>
                </div>
              </div>
              <h3 class="w-100 text-center py-3">Calidad y Eficiencia</h3>
              <h5 class="w-100 text-center fst-italic pb-2">"La calidad nos es un hábito, no un acto"</h5>
              <div class="d-flex justify-content-center">
                <p class="text-center">Nos encontramos en completa disposición de crear y facilitar las más útiles adquisiciones para tu hogar.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-3 order-lg-2" style="max-width:450px;">
          <div class="row text-details flex-column align-items-center px-2">
            <div class="detail-cont-2">
              <div class="d-flex justify-content-center">
                <div class="icon-cont-2 border shadow d-flex justify-content-center align-items-center">
                  <i class="icon-details-2 fas fa-dolly-flatbed"></i>
                </div>
              </div>
              <h3 class="w-100 text-center text-white py-3">Servicio y Atención</h3>
              <h5 class="px-3 text-center text-white fst-italic pb-2">"No forzamos nuestras ideas, innovamos en lo que nuestros clientes desean"</h5>
              <div class="d-flex justify-content-center">
                <p class="px-3 text-center text-white ">La lealtad y el mejor servicio al cliente son especiales y vitales para nuestros procesos comerciales.</p>
              </div>
              <div class="d-flex w-100 justify-content-center pb-3 pt-4">
                <a href="#" class="btn shadow-sm common-button common-button-2">¡Conocer más!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-2 pt-3 position-relative order-2 order-lg-3">
          <div class="row text-details flex-column align-items-center px-2">
            <div class="detail-cont">
              <div class="d-flex justify-content-center">
                <div class="icon-cont border shadow d-flex justify-content-center align-items-center">
                  <i class="icon-details fas fa-shipping-fast"></i>
                </div>
              </div>
              <h3 class="w-100 text-center py-3">Entrega y Confianza</h3>
              <h5 class="w-100 text-center fst-italic pb-2">"Nuestro destino es tu confianza"</h5>
              <div class="d-flex justify-content-center">
                <p class="w-75 text-center">Entregamos eficaz, rápida y profesionalmente con los más confiables servicios de entrega.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php require_once "presentation/layouts/footer.php" ?>
  </article>
</main>

<?php require_once "presentation/layouts/scripts.php" ?>