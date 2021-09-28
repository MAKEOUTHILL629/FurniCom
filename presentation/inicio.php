<?php




?>


<div class="container">
    <div class="row mt-3">
        <div class="col-4 col-sm-3 col-lg-2 text-center">
            <img src="img/logo.png" width="60%">

        </div>
        <div class="col-8 col-sm-9 col-lg-10">
            <h1 class="text-center">FurniCom</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <h5 class="card-header">Formulario de Registro</h5>
                <div class="card-body">
                    <?php
                    if (isset($_POST["crear"])) {
                        if($error == 0){
                            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                     Datos ingresados correctamente.
                                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                        } else if($error == 1){
                            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                     El correo ya existe.
                                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                        }
                    }
                    ?>
                    <form action="index.php?pid=<?php echo base64_encode("presentacion/cliente/registrarCliente.php") ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input type="email" class="form-control" name="correo" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Clave</label>
                            <input type="password" class="form-control" name="clave" required="required">
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="crear" class="btn btn-primary">Crear Cliente</button>
                        </div>
                        <a href="index.php">Regresar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

