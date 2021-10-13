<!-- DataTales Example -->
<div class="col-12">
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

                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    $order = new Order();
                    $orders = $order->consultAll();


                    foreach ($orders as $var) {
                        ?>
                        <tr>
                            <td><?php
                                echo $var->getId();
                                ?></td>
                            <td><?php echo $var->getShoppingCart()->getConsumer()->getDocumentNumber() ?></td>
                            <td><?php echo $var->getShoppingCart()->getPurchasedProducts() ?></td>
                            <td><?php echo $var->getTotalPurchase() ?></td>
                            <td><?php echo $var->getCreateAt() ?></td>
                            <td><?php echo $var->getUpdateAt() ?></td>

                            <td>

                                <?php if ($var->getPayment() === 0) { ?>

                                    <div class="d-flex w-100 justify-content-center">
                                        <i class="fas fa-circle text-danger" style="font-size: 1.5rem;"></i>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="d-flex w-100 justify-content-center">
                                        <i class="fas fa-circle text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <?php
                                } ?>

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