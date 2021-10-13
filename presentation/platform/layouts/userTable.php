<!-- DataTales Example -->
<div class="col-12">
    <div class="card shadow mb-4 ">
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

                    <?php
                    $user = new User();
                    $users = $user->consultAll();

                    foreach ($users

                    as $var) {

                    ?>
                    <tr>


                        <td><?php echo $var->getId() ?></td>
                        <td><?php echo $var->getIdentityDocument()->getAbbreviation() ?></td>
                        <td><?php echo $var->getDocumentNumber() ?></td>
                        <td><?php echo $var->getFirstNames() ?></td>
                        <td><?php echo $var->getLastNames() ?></td>
                        <td><?php echo $var->getEmail() ?></td>
                        <td>
                            <div class="d-flex w-100 justify-content-center">
                                <a href="index.php?sid=<?php echo base64_encode("user_show") ?>"
                                   class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="index.php?sid=<?php echo base64_encode("user_form") ?>"
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