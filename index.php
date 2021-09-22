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
</head>

<body>
  <header id="principal-header" class="shadow h-auto">
    <section id="top-header" class="row align-items-center px-5 py-3 justify-content-between shadow-sm position-relative">
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
      <div class="position-absolute d-flex decorate-container justify-content-center top-100 start-50 translate-middle">
        <i class="fas fa-caret-down mb-2"></i>
      </div>
    </section>
    <nav id="nav-container" class="navbar navbar-expand navbar-light bg-light shadow-sm animation-toggle-2">
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
            <ul class="dropdown-menu bg-light  px-2" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/litera.svg" class="furniture-icon me-1" alt="icon_futon"> Taburetes</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/bar.svg" class="furniture-icon me-1" alt="icon_futon"> Mini bares</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/mesilla-de-noche.svg" class="furniture-icon me-1" alt="icon_futon"> Mesas de noche</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/televisor.svg" class="furniture-icon me-1" alt="icon_futon"> Muebles de Televisor</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/comoda.svg" class="furniture-icon me-1" alt="icon_futon"> Cómodas</a></li>
              <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/futon.svg" class="furniture-icon me-1" alt="icon_futon"> Futones </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main id="principal-main">
    <button id="btn-toggle" class="btn rounded"><i class="fas fa-angle-double-up"></i></button>
    <section id="main-img" class="d-flex align-items-end">
      <h1 class="main-title w-100">¡La elegancia y modestia adaptada a la medida!</h1>
    </section>
    <h3 class="main-subtitle">¿Te gusta lo que ves?</h3>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="presentation/js/app.js"></script>
</body>

</html>