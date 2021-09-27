<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="presentation/css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
  <link rel="stylesheet" href="presentation/vendor/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="presentation/vendor/owl/assets/owl.theme.default.min.css">
</head>

<body>
  <header id="principal-header" class="shadow h-auto">
    <section id="top-header" class="row align-items-center px-5 py-3 justify-content-between position-relative">
      <div class="col-9 col-sm-3 order-1 order-sm-1">
        <button class="btn shadow-sm header-button-1">Iniciar Sesión</button>
      </div>
      <div class="col-12 col-sm-6 pb-3 pb-sm-0 order-0 order-sm-2">
        <a href="index.php" id="principal-logo" class="d-flex justify-content-center">
          <img src="presentation/img/logos/logo.svg" class="img-header" alt="logo">
        </a>
      </div>
      <div class="col-3 col-sm-3 order-2 order-sm-3">
        <div class="d-flex justify-content-end">
          <button class="btn shadow-sm header-button-2"><i class="fas fa-dolly"></i></button>
        </div>
      </div>
    </section>
    <div class="position-absolute d-flex decorate-container justify-content-center mt-2 top-100 start-50 translate-middle">
      <i class="fas fa-caret-down mb-2"></i>
    </div>
    <nav id="nav-container" class="navbar navbar-expand navbar-light bg-light shadow-sm animation-toggle-2" aria-label="header-nav">
      <div class="position-absolute d-flex decorate-container justify-content-center mt-1 top-0 start-50 translate-middle">
        <i class="fas fa-caret-down mb-2"></i>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav ">
        <ul id="nav-items" class="navbar-nav d-flex justify-content-center w-100">
          <li class="nav-item">
            <a class="nav-link" href="#">Sofas <br><img src="presentation/img/icons/sofa.svg" class="furniture-icon" alt="icon_sofa"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mesas <br><img src="presentation/img/icons/mesa.svg" class="furniture-icon" alt="icon_mesa"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sillas <br><img src="presentation/img/icons/silla.svg" class="furniture-icon" alt="icon_silla"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Camas <br><img src="presentation/img/icons/cama.svg" class="furniture-icon" alt="icon_cama"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Escritorios <br><img src="presentation/img/icons/escritorio.svg" class="furniture-icon" alt="icon_escritorio"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bibliotecas <br><img src="presentation/img/icons/biblioteca.svg" class="furniture-icon" alt="icon_biblioteca"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Otomanas <br><img src="presentation/img/icons/otomano.svg" class="furniture-icon" alt="icon_otomano"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Armarios <br><img src="presentation/img/icons/armario.svg" class="furniture-icon" alt="icon_armario"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Taburetes <br><img src="presentation/img/icons/taburete.svg" class="furniture-icon" alt="icon_futon"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Otros
            </a>
            <ul class="dropdown-menu bg-light drop-cont px-2" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/litera.svg" class="furniture-icon me-1" alt="icon_litera"> Literas</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/bar.svg" class="furniture-icon me-1" alt="icon_bar"> Mini bares</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/mesilla-de-noche.svg" class="furniture-icon me-1" alt="icon_mesa_de_noche"> Mesas de noche</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/televisor.svg" class="furniture-icon me-1" alt="icon_televisor"> Muebles de Televisor</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/comoda.svg" class="furniture-icon me-1" alt="icon_comoda"> Cómodas</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/futon.svg" class="furniture-icon me-1" alt="icon_futon"> Futones </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
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
          <div class="owl-carousel">
            <div class="cont-owl d-flex w-100 justify-content-center">
              <div class="card mt-3 shadow">
                <div class="position-relative">
                  <img src="presentation/img/owl/el_6.jpg" class="card-img-top owl-img" alt="...">
                  <span class="category-span shadow-sm">
                    <div class="triangle-top-right"></div>
                    Mesas
                  </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-color-1 py-2">Juego Comedor Cris Italia 4 Puestos</h5>
                  <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                    <div>
                      <small class="fst-italic text-muted">Precio Oferta:</small>
                      <p class="carousel-price m-0 text-muted fs-4 text-center">$ 1.830.000</p>
                    </div>
                    <a href="#" class="btn shadow-sm common-button">¡Lo quiero!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cont-owl d-flex w-100 justify-content-center">
              <div class="card mt-3 shadow">
                <div class="position-relative">
                  <img src="presentation/img/owl/el_2.jpg" class="card-img-top owl-img" alt="...">
                  <span class="category-span shadow-sm">
                    <div class="triangle-top-right"></div>
                    Salas
                  </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-color-1 py-2">Sala en L Onix Microfibra Taupe</h5>
                  <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                    <div>
                      <small class="fst-italic text-muted">Precio Oferta:</small>
                      <p class="carousel-price m-0 text-muted fs-4 text-center">$ 1.250.000</p>
                    </div>
                    <a href="#" class="btn shadow-sm common-button">¡Lo quiero!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cont-owl d-flex w-100 justify-content-center">
              <div class="card mt-3 shadow">
                <div class="position-relative">
                  <img src="presentation/img/owl/el_3.jpg" class="card-img-top owl-img" alt="...">
                  <span class="category-span shadow-sm">
                    <div class="triangle-top-right"></div>
                    Escritorios
                  </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-color-1 py-2">Escritorio Denver Natural</h5>
                  <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                    <div>
                      <small class="fst-italic text-muted">Precio Oferta:</small>
                      <p class="carousel-price m-0 text-muted fs-4 text-center">$ 449.000</p>
                    </div>
                    <a href="#" class="btn shadow-sm common-button">¡Lo quiero!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cont-owl d-flex w-100 justify-content-center">
              <div class="card mt-3 shadow">
                <div class="position-relative">
                  <img src="presentation/img/owl/el_1.jpg" class="card-img-top owl-img" alt="...">
                  <span class="category-span shadow-sm">
                    <div class="triangle-top-right"></div>
                    Biblioteca
                  </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-color-1 py-2">Biblioteca Gaudi Off White 70X175X35</h5>
                  <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                    <div>
                      <small class="fst-italic text-muted">Precio Oferta:</small>
                      <p class="carousel-price m-0 text-muted fs-4 text-center">$ 639.000</p>
                    </div>
                    <a href="#" class="btn shadow-sm common-button">¡Lo quiero!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cont-owl d-flex w-100 justify-content-center">
              <div class="card mt-3 shadow">
                <div class="position-relative">
                  <img src="presentation/img/owl/el_5.jpg" class="card-img-top owl-img" alt="...">
                  <span class="category-span shadow-sm">
                    <div class="triangle-top-right"></div>
                    Mesas
                  </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-color-1 py-2">Comedor 4 Puestos Amber Eurolino Marfil, Natural</h5>
                  <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                    <div>
                      <small class="fst-italic text-muted">Precio Oferta:</small>
                      <p class="carousel-price m-0 text-muted fs-4 text-center">$ 2.199.000</p>
                    </div>
                    <a href="#" class="btn shadow-sm common-button">¡Lo quiero!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cont-owl d-flex w-100 justify-content-center">
              <div class="card mt-3 shadow">
                <div class="position-relative">
                  <img src="presentation/img/owl/el_4.jpg" class="card-img-top owl-img" alt="...">
                  <span class="category-span shadow-sm">
                    <div class="triangle-top-right"></div>
                    Camas
                  </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-color-1 py-2">Cama Doble Basic Noruega Eurolino Plata, Blanco</h5>
                  <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                    <div>
                      <small class="fst-italic text-muted">Precio Oferta:</small>
                      <p class="carousel-price m-0 text-muted fs-4 text-center">$ 2.120.000</p>
                    </div>
                    <a href="#" class="btn shadow-sm common-button">¡Lo quiero!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
      <footer id="landing-footer" class="container-fluid py-3">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-4 col-md-6 order-3 order-lg-1 order-md-2">
            <div class="row justify-content-around">
              <div class="d-flex flex-column w-auto border-1 ps-4 mt-3">
                <div class="d-flex align-items-center pb-2">
                  <i class="footer-icon fas fa-phone-square"></i>
                  <p class="d-inline-block m-0 text-white ps-3">+57 3218739029</p>
                </div>
                <div class="d-flex align-items-center pb-2">
                  <i class="footer-icon fas fa-envelope-square"></i>
                  <p class="d-inline-block m-0 text-white ps-3">servicioalcliente@furnicom.co</p>
                </div>
                <div class="d-flex align-items-center pb-2">
                  <i class="footer-icon fas fa-map-marker-alt"></i>
                  <p class="d-inline-block m-0 text-white ps-3">Ak 68 #No 23 – 15, Bogotá, Cundinamarca</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-1 col-md-12 order-lg-2 order-md-1">
            <div class="row align-items-center">
              <a href="index.php" id="principal-logo" class="h-100 d-flex justify-content-center">
                <img src="presentation/img/logos/logo_w.svg" class="img-footer" alt="logo">
              </a>
              <div class="d-flex justify-content-center pt-2">
                <p class="fs-5 text-white">FurniCom © 2021</p>
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <a href="" class="w-auto">
                  <i class="footer-icon fab fa-facebook"></i>
                </a>
                <a href="" class="w-auto px-3">
                  <i class="footer-icon fab fa-instagram"></i>
                </a>
                <a href="" class="w-auto">
                  <i class="footer-icon fab fa-twitter"></i>
                </a>
              </div>
            </div>
          </div>
          <div id="eslogan-section" class="col-lg-4 col-md-6 order-2 order-lg-3 order-md-3">
            <div class="d-flex w-100 justify-content-center">
              <div class="eslogan-cont">
                <p class="text-white border-1 ps-3 py-3">Bienvenida la fabricación mobiliaria de hogar y las estancias de trabajo, por más de 40 años.</p>
              </div>
            </div>
            <div class="d-flex w-100 justify-content-center mt-2">
              <div class="d-flex align-items-center px-2">
                <i class="footer-icon fas fa-box"></i>
              </div>
              <div class="d-flex align-items-center px-2">
                <i class="footer-icon fas fa-dolly-flatbed"></i>
              </div>
              <div class="d-flex align-items-center px-2">
                <i class="footer-icon fas fa-shipping-fast"></i>
              </div>
            </div>

          </div>
        </div>
        </div>
      </footer>
    </article>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="presentation/js/jquery.min.js"></script>
  <script src="presentation/vendor/owl/owl.carousel.min.js"></script>
  <script src="presentation/js/app.js"></script>
</body>

</html>