<!-- Sidebar -->

<?php


?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="index.php?sid=<?php echo base64_encode("dashboard") ?>">
        <div class="sidebar-brand-icon ">
            <img class="mb-2" src="presentation/img/logo_w.svg" style="max-width: 30px !important;" alt="...">
        </div>
        <div class="sidebar-brand-text mx-3">FurniCom <sup>P</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php?sid=<?php echo base64_encode("dashboard") ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Users
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Panel de Gestores</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                <a class="collapse-item" href="index.php?sid=<?php echo base64_encode("users_table") ?>">Visualizar</a>
                <a class="collapse-item" href="index.php?sid=<?php echo base64_encode("user_form") ?>">Crear</a>
            </div>
        </div>
    </li>


    <!-- Heading -->
    <div class="sidebar-heading">
        Pedidos
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="index.php?sid=<?php echo base64_encode("orders_table") ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Visor de pedidos</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Productos
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chair"></i>
            <span>Panel de Gestión</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                <a class="collapse-item"
                   href="index.php?sid=<?php echo base64_encode("products_table") ?>">Visualizar</a>
                <a class="collapse-item" href="index.php?sid=<?php echo base64_encode("product_form") ?>">Crear</a>
            </div>
        </div>
    </li>


    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="presentation/img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>FurniCom</strong></p>
        <p class="text-center mb-2">¡La elegancia y la modestia adaptada a la medida!</p>
    </div>

</ul>