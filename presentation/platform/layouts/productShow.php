<?php


if (isset($_GET["idproduct"])) {
    $product = new Product($_GET["idproduct"]);
    $product->consult();
}

?>

<!-- Show de Producto -->
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
                                <p class="form-control" style="background-color: #f8f8f8;"><?php echo $product->getName() ?></p>
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
                                <p class="form-control" style="background-color: #f8f8f8;"><?php echo $product->getCategory()->getName() ?></p>
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
                                <p class="form-control" style="background-color: #f8f8f8;">$ <?php echo $product->getPrice() ?></p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-12 col-md">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descripción</label>
                            <textarea class="form-control" style="min-height: 100px !important;"
                                      id="exampleFormControlTextarea1" rows="3" disabled="true"
                                      placeholder="Indique detalles del producto"><?php echo $product->getDescription() ?></textarea>
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
                                <p class="form-control" style="background-color: #f8f8f8;"><?php echo $product->getStock() ?></p>
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