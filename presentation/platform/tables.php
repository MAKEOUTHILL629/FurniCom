<?php require_once "presentation/platform/layouts/head.php" ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once "presentation/platform/layouts/sidebar.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once "presentation/platform/layouts/topbar.php" ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tables</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle fa-sm text-white-50"></i> Crear nuevo</a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Productos</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categoría</th>
                                        <th>Nombre</th>
                                        <th>Stock Disponible</th>
                                        <th>Precio</th>
                                        <th>
                                            <div class="d-flex w-100 justify-content-center">
                                                <i class="fas fa-tools"></i>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sillas</td>
                                        <td>Silla de Mesa</td>
                                        <td>61</td>
                                        <td>$535000</td>
                                        <td>
                                            <div class="d-flex w-100 justify-content-center">
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="#" class="btn btn-warning btn-circle btn-sm mx-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Pedidos</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTableOrders" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Documento</th>
                                        <th>Stock</th>
                                        <th>Total</th>
                                        <th>Creación</th>
                                        <th>Actualización</th>
                                        <th>Pago</th>
                                        <th>
                                            <div class="d-flex w-100 justify-content-center">
                                                <i class="fas fa-tools"></i>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1193512063</td>
                                        <td>2</td>
                                        <td>2021-10-12 5:00pm</td>
                                        <td>2021-10-12 5:50pm</td>
                                        <td>$ 459999</td>
                                        <td>
                                            <div class="d-flex w-100 justify-content-center">
                                                <i class="fas fa-circle text-success" style="font-size: 1.5rem;"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex w-100 justify-content-center">
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1849372953</td>
                                        <td>5</td>
                                        <td>2021-09-12 5:00pm</td>
                                        <td>2021-09-12 5:50pm</td>
                                        <td>$ 899000</td>
                                        <td>
                                            <div class="d-flex w-100 justify-content-center">
                                                <i class="fas fa-circle text-warning" style="font-size: 1.5rem;"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex w-100 justify-content-center">
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Gestores</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTableUser" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>T.D.</th>
                                        <th>Documento</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Email</th>
                                        <th>
                                            <div class="d-flex w-100 justify-content-center">
                                                <i class="fas fa-tools"></i>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>CC</td>
                                        <td>1193512063</td>
                                        <td>Brayan Steban</td>
                                        <td>Cantor Munevar</td>
                                        <td>genyuro@hotmail.com</td>
                                        <td>
                                            <div class="d-flex w-100 justify-content-center">
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="#" class="btn btn-warning btn-circle btn-sm mx-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- End of Content Wrapper -->

                <!-- Footer -->
                <?php require_once "presentation/platform/layouts/footer.php" ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Logout Modal-->
            <?php require_once "presentation/platform/layouts/modal.php" ?>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<?php require_once "presentation/platform/layouts/scripts.php" ?>