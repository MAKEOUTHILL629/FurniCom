<header id="principal-header" class="shadow h-auto">
    <section id="top-header" class="row align-items-center px-5 py-3 justify-content-center position-relative">
        <div class="col-6 col-sm-3 order-1 order-sm-1">
            <div class="row">

                <?php
                if (isset($_SESSION["id"]) && $_SESSION["id"] != "") {
                    ?>
                    <a class="btn modal_button shadow-sm header-button-1" href="index.php?sesion=false">
                        Cerrar sesion
                    </a>


                    <?php
                    $user = new User($_SESSION["id"]);
                    $user->consultUser();
                    if ($user->getRole()->getId() >= 1 && $user->getRole()->getId() <= 3) {

                        ?>
                        <a class="btn modal_button shadow-sm header-button-1" style="background-color: #00AAFF !important; margin-left: 10px"
                           href="index.php?sid=<?php echo base64_encode("dashboard") ?>">
                            Dashboard
                        </a>

                        <?php

                    }
                } else {

                    ?>
                    <button class="btn modal_button shadow-sm header-button-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Iniciar Sesión
                    </button>

                    <?php
                }

                ?>

            </div>
        </div>
        <div class="col-12 col-sm-6 pb-3 pb-sm-0 order-0 order-sm-2">
            <div class="d-flex justify-content-center">
                <a href="index.php" id="principal-logo">
                    <img src="presentation/img/logos/logo.svg" class="img-header" alt="logo">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-3 order-2 order-sm-3">
            <div class="d-flex justify-content-end">
                <button class="btn modal_button shadow-sm header-button-2" data-bs-toggle="modal"
                        data-bs-target="#shopping_cart"><i class="fas fa-dolly"></i></button>
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
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Sofas">Sofas
                        <br><img src="presentation/img/icons/sofa.svg" class="furniture-icon" alt="icon_sofa"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Mesas">Mesas
                        <br><img src="presentation/img/icons/mesa.svg" class="furniture-icon" alt="icon_mesa"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Síllas">Sillas
                        <br><img src="presentation/img/icons/silla.svg" class="furniture-icon" alt="icon_silla"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Camas">Camas
                        <br><img src="presentation/img/icons/cama.svg" class="furniture-icon" alt="icon_cama"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Escritorios">Escritorios
                        <br><img src="presentation/img/icons/escritorio.svg" class="furniture-icon"
                                 alt="icon_escritorio"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Bibliotecas">Bibliotecas
                        <br><img src="presentation/img/icons/biblioteca.svg" class="furniture-icon"
                                 alt="icon_biblioteca"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Otomanas">Otomanas
                        <br><img src="presentation/img/icons/otomano.svg" class="furniture-icon" alt="icon_otomano"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Armarios">Armarios
                        <br><img src="presentation/img/icons/armario.svg" class="furniture-icon" alt="icon_armario"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Taburetes">Taburetes
                        <br><img src="presentation/img/icons/taburete.svg" class="furniture-icon" alt="icon_futon"></a>
                </li>
                <li id="dropdown-nav" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Otros
                    </a>
                    <ul class="dropdown-menu bg-light drop-cont px-2" style="z-index: 3;"
                        aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                               href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Literas"><img
                                        src="presentation/img/icons/litera.svg" class="furniture-icon me-1"
                                        alt="icon_litera">
                                Literas</a></li>
                        <li><a class="dropdown-item"
                               href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Mini bar"><img
                                        src="presentation/img/icons/bar.svg" class="furniture-icon me-1" alt="icon_bar">
                                Mini bares</a></li>
                        <li><a class="dropdown-item"
                               href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Mesa de noche"><img
                                        src="presentation/img/icons/mesilla-de-noche.svg" class="furniture-icon me-1"
                                        alt="icon_mesa_de_noche"> Mesas de noche</a></li>
                        <li><a class="dropdown-item"
                               href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Muebles de televisor"><img
                                        src="presentation/img/icons/televisor.svg" class="furniture-icon me-1"
                                        alt="icon_televisor"> Muebles de Televisor</a>
                        </li>
                        <li><a class="dropdown-item"
                               href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Cómodas"><img
                                        src="presentation/img/icons/comoda.svg" class="furniture-icon me-1"
                                        alt="icon_comoda">
                                Cómodas</a></li>
                        <li><a class="dropdown-item"
                               href="index.php?pid=<?php echo base64_encode("presentation/shop.php") ?>&category=Futones"><img
                                        src="presentation/img/icons/futon.svg" class="furniture-icon me-1"
                                        alt="icon_futon">
                                Futones </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<?php require_once "modal_login.php" ?>
<?php require_once "shopping_cart.php" ?>