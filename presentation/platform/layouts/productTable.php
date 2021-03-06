<!-- DataTales Example -->
<div class="col-12">
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
                    <?php
                    $product = new Product();
                    $products = $product->consultAllByOrderName();


                    foreach ($products as $var) {
                        ?>
                        <tr>
                            <td><?php echo $var->getIdProduct() ?></td>
                            <td><?php echo $var->getCategory()->getName() ?></td>
                            <td><?php echo $var->getName() ?></td>
                            <td><?php echo $var->getStock() ?></td>
                            <td><?php echo $var->getPrice() ?></td>
                            <td>
                                <div class="d-flex w-100 justify-content-center">
                                    <a href="index.php?sid=<?php echo base64_encode("product_show") ?>&idproduct=<?php echo $var->getIdProduct() ?>"
                                       class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="index.php?sid=<?php echo base64_encode("product_form") ?>&idproduct=<?php echo $var->getIdProduct() ?>"
                                       class="btn btn-warning btn-circle btn-sm mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php

                    }
                    ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>