<?php

include_once './logics/Product.php';
include_once './logics/ProductPicture.php';
$product = new Product();
$products = $product->consultAllByOrderName();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="presentation/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <link rel="stylesheet" href="presentation/vendor/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="presentation/vendor/owl/assets/owl.theme.default.min.css">
</head>

<body>
<header id="principal-header" class="shadow h-auto">
    <section id="top-header" class="row align-items-center px-5 py-3 justify-content-center position-relative">
        <div class="col-6 col-sm-3 order-1 order-sm-1">
            <div class="row">
                <button class="btn shadow-sm header-button-1">Iniciar Sesión</button>
            </div>
        </div>
        <div class="col-12 col-sm-6 pb-3 pb-sm-0 order-0 order-sm-2">
            <a href="index.php" id="principal-logo" class="d-flex justify-content-center">
                <img src="presentation/img/logos/logo.svg" class="img-header" alt="logo">
            </a>
        </div>
        <div class="col-6 col-sm-3 order-2 order-sm-3">
            <div class="d-flex justify-content-end">
                <button class="btn shadow-sm header-button-2"><i class="fas fa-dolly"></i></button>
            </div>
        </div>
    </section>
    <div class="position-absolute d-flex decorate-container justify-content-center mt-2 top-100 start-50 translate-middle">
        <i class="fas fa-caret-down mb-2"></i>
    </div>
    <nav id="nav-container" class="navbar navbar-expand navbar-light bg-light shadow-sm animation-toggle-2"
         aria-label="header-nav">
        <div class="position-absolute d-flex decorate-container justify-content-center mt-1 top-0 start-50 translate-middle">
            <i class="fas fa-caret-down mb-2"></i>
        </div>
        <div class="collapse navbar-collapse position-relative" id="navbarNav">
            <ul id="nav-items" class="navbar-nav d-flex justify-content-center w-100">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sofas <br><img src="presentation/img/icons/sofa.svg"
                                                                class="furniture-icon" alt="icon_sofa"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mesas <br><img src="presentation/img/icons/mesa.svg"
                                                                class="furniture-icon" alt="icon_mesa"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sillas <br><img src="presentation/img/icons/silla.svg"
                                                                 class="furniture-icon" alt="icon_silla"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Camas <br><img src="presentation/img/icons/cama.svg"
                                                                class="furniture-icon" alt="icon_cama"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Escritorios <br><img src="presentation/img/icons/escritorio.svg"
                                                                      class="furniture-icon" alt="icon_escritorio"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bibliotecas <br><img src="presentation/img/icons/biblioteca.svg"
                                                                      class="furniture-icon" alt="icon_biblioteca"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Otomanas <br><img src="presentation/img/icons/otomano.svg"
                                                                   class="furniture-icon" alt="icon_otomano"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Armarios <br><img src="presentation/img/icons/armario.svg"
                                                                   class="furniture-icon" alt="icon_armario"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Taburetes <br><img src="presentation/img/icons/taburete.svg"
                                                                    class="furniture-icon" alt="icon_futon"></a>
                </li>
                <li id="dropdown-nav" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Otros
                    </a>
                    <ul class="dropdown-menu bg-light drop-cont px-2" style="z-index: 3;"
                        aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/litera.svg"
                                                                   class="furniture-icon me-1" alt="icon_litera">
                                Literas</a></li>
                        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/bar.svg"
                                                                   class="furniture-icon me-1" alt="icon_bar"> Mini
                                bares</a></li>
                        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/mesilla-de-noche.svg"
                                                                   class="furniture-icon me-1" alt="icon_mesa_de_noche">
                                Mesas de noche</a></li>
                        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/televisor.svg"
                                                                   class="furniture-icon me-1" alt="icon_televisor">
                                Muebles de Televisor</a></li>
                        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/comoda.svg"
                                                                   class="furniture-icon me-1" alt="icon_comoda">
                                Cómodas</a></li>
                        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/futon.svg"
                                                                   class="furniture-icon me-1" alt="icon_futon"> Futones
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="decorate-line-2"></div>
<main id="shop-main" class="shadow position-relative overflow">
    <button id="btn-toggle" class="btn rounded"><i class="fas fa-angle-double-up"></i></button>
    <div class="decorate-line-3 top-50 start-50 translate-middle"></div>
    <div class="container-fluid h-100 px-2">
        <div class="row justify-content-center align-items-center shadow-sm pt-3 mb-3 bg-sec">
            <h3 class="text-center text-white">Sillas <img src="presentation/img/icons/silla.svg" class="furniture-icon"
                                                           alt="icon_silla"></h3>
        </div>
        <div class="row">
            <div class="filters-cont col-12 col-sm-12 col-md-4 col-lg-3 order-2 order-md-1">
                <div class="rounded border shadow-sm m-3 p-3 bg-white">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="text-muted w-auto pb-3 m-0">Filtros</h4>
                            <h6 class="fw-bold pt-3">TODAS</h6>
                            <p class="text-muted">3500 productos en Stock!</p>
                        </div>
                        <div class="shadow view-btn rounded-circle mx-1" id="gallery-view">
                            <i class="far fa-list-alt filters-icon"></i>
                        </div>
                    </div>
                    <hr>
                    <h6 class="fw-bold py-3">PRECIO</h6>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Min value">
                        </div>
                        <p class="fs-2 m-0 p-0  w-auto">-</p>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Max value">
                        </div>
                    </div>
                    <hr>
                    <h6 class="fw-bold py-3">ORDENAR</h6>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order">
                                <label class="form-check-label" for="order_option">
                                    Menor Precio
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order">
                                <label class="form-check-label" for="order_option">
                                    Mayor Precio
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order">
                                <label class="form-check-label" for="order_option">
                                    Más Nuevos
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order">
                                <label class="form-check-label" for="order_option">
                                    Más Antiguos
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order">
                                <label class="form-check-label" for="order_option">
                                    A-Z
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="order">
                                <label class="form-check-label" for="order_option">
                                    Z-A
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order">
                        <label class="form-check-label" for="order_option">
                            Más Vendidos
                        </label>
                    </div>
                    <hr>
                    <h6 class="fw-bold py-3">PRODUCTOS</h6>
                    <div class="row justify-content-center">
                        <button class="btn w-auto m-2 btn-filter active">10</button>
                        <button class="btn w-auto m-2 btn-filter">20</button>
                        <button class="btn w-auto m-2 btn-filter">30</button>
                        <button class="btn w-auto m-2 btn-filter">No Limit</button>
                    </div>
                    <hr>
                </div>
                <nav aria-label="Page navigation example" class="mt-4 ">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-1 order-md-2">
                <div class="row justify-content-center pt-3 bg-pr rounded shadow">
                    <div class="row">
                        <!--                        <div class="col-12 col-sm-6 col-lg-4">-->
                        <!---->
                        <!--                            <div class="card item-shop">-->
                        <!--                                <a href=""><img src="presentation/img/products/el_1.jpg" class="img-fluid"-->
                        <!--                                                alt="..."></a>-->
                        <!---->
                        <!--                                <div class="card-body">-->
                        <!--                                    <h6 class="card-title text-color-1 py-2">Cama Doble Basic Noruega Eurolino Plata,-->
                        <!--                                        Blanco</h6>-->
                        <!--                                    <div class="d-flex w-100 justify-content-between align-items-center pe-2">-->
                        <!--                                        <div>-->
                        <!--                                            <small class="fst-italic text-muted">Precio Oferta:</small>-->
                        <!--                                            <p class="carousel-price m-0 text-muted fs-5 text-center">$ 2.120.000</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div>-->
                        <!--                                            <a href="" class="btn shadow-sm plus-button rounded-circle"><i-->
                        <!--                                                        class="fas fa-search"></i></a>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-12 col-sm-6 col-lg-4">-->
                        <!--                            <div class="card item-shop">-->
                        <!--                                <a href=""><img src="presentation/img/products/el_1.jpg" class="img-fluid"-->
                        <!--                                                alt="..."></a>-->
                        <!--                                <div class="card-body">-->
                        <!--                                    <h6 class="card-title text-color-1 py-2">Cama Doble Basic Noruega Eurolino Plata,-->
                        <!--                                        Blanco</h6>-->
                        <!--                                    <div class="d-flex w-100 justify-content-between align-items-center pe-2">-->
                        <!--                                        <div>-->
                        <!--                                            <small class="fst-italic text-muted">Precio Oferta:</small>-->
                        <!--                                            <p class="carousel-price m-0 text-muted fs-5 text-center">$ 2.120.000</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div>-->
                        <!--                                            <a href="" class="btn shadow-sm plus-button rounded-circle"><i-->
                        <!--                                                        class="fas fa-search"></i></a>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-12 col-sm-6 col-lg-4">-->
                        <!--                            <div class="card item-shop">-->
                        <!--                                <a href=""><img src="presentation/img/products/el_1.jpg" class="img-fluid"-->
                        <!--                                                alt="..."></a>-->
                        <!--                                <div class="card-body">-->
                        <!--                                    <h6 class="card-title text-color-1 py-2">Cama Doble Basic Noruega Eurolino Plata,-->
                        <!--                                        Blanco</h6>-->
                        <!--                                    <div class="d-flex w-100 justify-content-between align-items-center pe-2">-->
                        <!--                                        <div>-->
                        <!--                                            <small class="fst-italic text-muted">Precio Oferta:</small>-->
                        <!--                                            <p class="carousel-price m-0 text-muted fs-5 text-center">$ 2.120.000</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div>-->
                        <!--                                            <a href="" class="btn shadow-sm plus-button rounded-circle"><i-->
                        <!--                                                        class="fas fa-search"></i></a>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->


                        <?php
                        $consultImages = new ProductPicture();

                        foreach ($products as $item) {

                            $images = $consultImages->consultByProduct($item->getIdProduct());


                            ?>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="card item-shop">
                                    <a href=""><img src="<?php echo $images[0]->getPath(); ?>" class="img-fluid"
                                                    alt="..."></a>
                                    <div class="card-body">
                                        <h6 class="card-title text-color-1 py-2"><?php echo $item->getName(); ?></h6>
                                        <div class="d-flex w-100 justify-content-between align-items-center pe-2">
                                            <div>
                                                <small class="fst-italic text-muted">Precio Oferta:</small>
                                                <p class="carousel-price m-0 text-muted fs-5 text-center">$
                                                    <?php echo $item->getPrice(); ?></p>
                                            </div>
                                            <div>
                                                <a href="" class="btn shadow-sm plus-button rounded-circle"><i
                                                            class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php

                        }

                        ?>

                        <!--                        <div class="col-12 col-sm-6 col-lg-4">-->
                        <!--                            <div class="card item-shop">-->
                        <!--                                <a href=""><img src="presentation/img/products/el_1.jpg" class="img-fluid"-->
                        <!--                                                alt="..."></a>-->
                        <!--                                <div class="card-body">-->
                        <!--                                    <h6 class="card-title text-color-1 py-2">Cama Doble Basic Noruega Eurolino Plata,-->
                        <!--                                        Blanco</h6>-->
                        <!--                                    <div class="d-flex w-100 justify-content-between align-items-center pe-2">-->
                        <!--                                        <div>-->
                        <!--                                            <small class="fst-italic text-muted">Precio Oferta:</small>-->
                        <!--                                            <p class="carousel-price m-0 text-muted fs-5 text-center">$ 2.120.000</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div>-->
                        <!--                                            <a href="" class="btn shadow-sm plus-button rounded-circle"><i-->
                        <!--                                                        class="fas fa-search"></i></a>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-12 col-sm-6 col-lg-4">-->
                        <!--                            <div class="card item-shop">-->
                        <!--                                <a href=""><img src="presentation/img/products/el_1.jpg" class="img-fluid"-->
                        <!--                                                alt="..."></a>-->
                        <!--                                <div class="card-body">-->
                        <!--                                    <h6 class="card-title text-color-1 py-2">Cama Doble Basic Noruega Eurolino Plata,-->
                        <!--                                        Blanco</h6>-->
                        <!--                                    <div class="d-flex w-100 justify-content-between align-items-center pe-2">-->
                        <!--                                        <div>-->
                        <!--                                            <small class="fst-italic text-muted">Precio Oferta:</small>-->
                        <!--                                            <p class="carousel-price m-0 text-muted fs-5 text-center">$ 2.120.000</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div>-->
                        <!--                                            <a href="" class="btn shadow-sm plus-button rounded-circle"><i-->
                        <!--                                                        class="fas fa-search"></i></a>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="landing-footer" class="container-fluid pb-3 pt-5 mt-4">
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
                        <p class="text-white border-1 ps-3 py-3">Bienvenida la fabricación mobiliaria de hogar y las
                            estancias de trabajo, por más de 40 años.</p>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="presentation/js/jquery.min.js"></script>
<script src="presentation/vendor/owl/owl.carousel.min.js"></script>
<script src="presentation/js/app.js"></script>
<script src="presentation/js/app.js"></script>
</body>

</html>