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
                    <h1 class="h3 mb-0 text-gray-800">Formulario</h1>
                </div>

                <div class="row justify-content-center">

                    <!-- Formulario Creación, Actualización de Usuario -->
                    <div class="col-12  col-sm-10 col-md-12 col-lg-8">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-primary d-flex pt-4 justify-content-center align-items-center">
                                <h4 class="font-weight-bold text-white text-center">Formulario Creación Gestor</h4>
                            </div>
                            <div class="card-body">
                                <form action="">

                                    <!-- Divider -->
                                    <hr class="sidebar-divider">
                                    <div class="row">
                                        <div class="col-12 col-md">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Documento de Identidad</label>
                                                <div class="input-group">
                                                    <select class="form-control" style="max-width: 80px !important; border-radius: 0px !important; background-color: #e9ecef !important;" id="exampleFormControlSelect1">
                                                        <option>CC</option>
                                                        <option>CE</option>
                                                        <option>TI</option>
                                                        <option>PAS</option>
                                                    </select>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0000000000">
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
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@mail.com">
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
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angie Tatiana">
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
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rincón Gutierrez">
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
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Especifica la dirección de domicilio">
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
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0000000000">
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
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Selecciona</option>
                                                        <option>Masculino</option>
                                                        <option>Femenino</option>
                                                        <option>Otro</option>
                                                        <option>Binario</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="d-flex h-100 align-items-end justify-content-end">
                                                <button type="submit" class="btn px-5 btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>


                    <!-- Formulario Creación, Actualización de Producto -->
                    <div class="col-12  col-sm-10 col-md-12 col-lg-8">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-primary d-flex pt-4 justify-content-center align-items-center">
                                <h4 class="font-weight-bold text-white text-center">Formulario Creación Producto</h4>
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
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Indique aquí el nombre del producto">
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
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Selecciona Categoría</option>
                                                        <option>Sillas</option>
                                                        <option>Muebles</option>
                                                        <option>Sofás</option>
                                                        <option>Mesas</option>
                                                    </select>
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
                                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Indique el precio del producto">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-12 col-md">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Descripción</label>
                                                <textarea class="form-control" style="min-height: 100px !important;" id="exampleFormControlTextarea1" rows="3" placeholder="Indique detalles del producto"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-12 col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Stock Inicial</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validatedInputGroupPrepend">
                                                            <i class="fas fa-boxes"></i>
                                                        </span>
                                                    </div>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="000">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Imágenes</label>
                                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" multiple>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <div class="d-flex h-100 align-items-end justify-content-end">
                                                <button type="submit" class="btn px-5 btn-primary">Submit</button>
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