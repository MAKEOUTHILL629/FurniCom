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
                    <h1 class="h3 mb-0 text-gray-800">Show</h1>
                </div>

                <div class="row justify-content-center">

                    <!-- Formulario Creación, Actualización de Usuario -->
                    <div class="col-12  col-sm-10 col-md-12 col-lg-8">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-primary d-flex pt-4 justify-content-center align-items-center">
                                <h4 class="font-weight-bold text-white text-center">Información Gestor</h4>
                            </div>
                            <div class="card-body">


                                <!-- Divider -->
                                <hr class="sidebar-divider">
                                <div class="row">
                                    <div class="col-12 col-md">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Documento de Identidad</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validatedInputGroupPrepend">
                                                        CC
                                                    </span>
                                                </div>
                                                <p class="form-control" style="background-color: #f8f8f8;">1193512063</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validatedInputGroupPrepend">
                                                        <i class="fas fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <p class="form-control" style="background-color: #f8f8f8;">genyuro@hotmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombres</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validatedInputGroupPrepend">
                                                        <i class="fas fa-signature"></i>
                                                    </span>
                                                </div>
                                                <p class="form-control" style="background-color: #f8f8f8;">Brayan Steban</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Apellidos</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validatedInputGroupPrepend">
                                                        <i class="fas fa-signature"></i>
                                                    </span>
                                                </div>
                                                <p class="form-control" style="background-color: #f8f8f8;">Cantor Munevar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dirección</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validatedInputGroupPrepend">
                                                        <i class="fas fa-city"></i>
                                                    </span>
                                                </div>
                                                <p class="form-control" style="background-color: #f8f8f8;">Kra 73 I no 62 A 46 sur</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Teléfono</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validatedInputGroupPrepend">
                                                        <i class="fas fa-phone-square-alt"></i>
                                                    </span>
                                                </div>
                                                <p class="form-control" style="background-color: #f8f8f8;">3213208196</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Género</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validatedInputGroupPrepend">
                                                        <i class="fas fa-venus-mars"></i>
                                                    </span>
                                                </div>
                                                <p class="form-control" style="background-color: #f8f8f8;">Masculino</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="d-flex h-100 align-items-end justify-content-end">
                                            <a href="forms.html" class="btn px-5 btn-primary">Actualizar</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <!-- Formulario Creación, Actualización de Producto -->
                    <div class="col-12  col-sm-10 col-md-12 col-lg-8">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-primary d-flex pt-4 justify-content-center align-items-center">
                                <h4 class="font-weight-bold text-white text-center">Información Producto
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="">

                                    <!-- Divider -->
                                    <hr class="sidebar-divider">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombre Producto</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validatedInputGroupPrepend">
                                                            <i class="fas fa-signature"></i>
                                                        </span>
                                                    </div>
                                                    <p class="form-control" style="background-color: #f8f8f8;">Mesa de estar lo más bueno wow</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Categoría</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validatedInputGroupPrepend">
                                                            <i class="fas fa-chair"></i>
                                                        </span>
                                                    </div>
                                                    <p class="form-control" style="background-color: #f8f8f8;">Mesas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Precio</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validatedInputGroupPrepend">
                                                            <i class="fas fa-dollar-sign"></i>
                                                        </span>
                                                    </div>
                                                    <p class="form-control" style="background-color: #f8f8f8;">$ 500000</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-12 col-md">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Descripción</label>
                                                <textarea class="form-control" style="min-height: 100px !important;" id="exampleFormControlTextarea1" rows="3" disabled="true" placeholder="Indique detalles del producto">Es lo más de lo más wow</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-12 col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Stock</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validatedInputGroupPrepend">
                                                            <i class="fas fa-boxes"></i>
                                                        </span>
                                                    </div>
                                                    <p class="form-control" style="background-color: #f8f8f8;">238</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="d-flex h-100 align-items-end justify-content-end">
                                                <a href="forms.html" class="btn px-5 btn-primary">Actualizar</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once "presentation/platform/layouts/footer.php" ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Logout Modal-->
<?php require_once "presentation/platform/layouts/modal.php" ?>

<!-- Logout Modal-->
<?php require_once "presentation/platform/layouts/scripts.php" ?>