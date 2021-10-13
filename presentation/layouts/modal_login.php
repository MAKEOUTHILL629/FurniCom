<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog shadow modal-dialog-centered" style="max-width:400px" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border:0;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 py-3">
                <div class="d-flex align-items-center justify-content-center">
                    <i class="far fa-user-circle fw-bold" style="color:var(--color-4); font-size:10rem;"></i>
                </div>
                <h3 class="text-center mb-4 fw-bold" style="color:var(--color-4);">LogIn</h3>
                <form action="index.php?pid=<?php echo base64_encode('controllers/authenticate.php') ?>" METHOD="POST">
                    <div class="input-group input-group-lg py-2">
                        <span class="input-group-text d-flex justify-content-center" id="inputGroup-sizing-default"
                              style="width:40px"><i class="fas fa-id-card"></i></span>
                        <input type="text" class="form-control rounded-left" name="email" placeholder="correo">
                    </div>
                    <div class="input-group input-group-lg py-2">
                        <span class="input-group-text d-flex justify-content-center" id="inputGroup-sizing-default"
                              style="width:40px"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control rounded-left" name="password" placeholder="Password">
                    </div>
                    <div class="input-group input-group-lg py-3 px-5">
                        <button type="submit" class="form-control btn common-button rounded submit h-100 px-3">Inicia
                            sesión
                        </button>
                    </div>
                    <div class="form-group d-md-flex justify-content-center">
                        <a href="index.php?sid=<?php echo base64_encode("dashboard") ?>">Luis entre aqui</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center bg-light">
                <p>¿No te has registrado?
                    <button class="btn ps-2 modal_button" style="color:var(--color-5);" data-bs-dismiss="modal"
                            data-bs-toggle="modal" data-bs-target="#registerModal">
                        Crear un perfil
                    </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" style="overflow-y:hidden !important;" id="registerModal" tabindex="-1"
     aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog shadow modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border:0;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 py-0">
                <div class="d-flex align-items-center justify-content-center">
                    <i class="far fa-users fw-bold" style="color:var(--color-4); font-size:8rem;"></i>
                </div>
                <h3 class="text-center mb-4 fw-bold" style="color:var(--color-4);">Register</h3>
                <form action="index.php?pid=<?php echo base64_encode('controllers/registerUser.php') ?>" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombre: </label>
                                <input type="text" class="form-control" name="nombres" aria-describedby="nombre">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos: </label>
                                <input type="text" class="form-control" name="apellidos" aria-describedby="apellidos">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tipo_documento" class="form-label">Documento de Identidad: </label>
                                <div class="input-group">
                                    <select name="tipo_documento" class="form-select" style="max-width:100px"
                                            aria-label="tipo_documento">
                                        <option selected>Doc.</option>
                                        <option value="2">CC</option>
                                        <option value="1">TI</option>
                                        <option value="4">CE</option>
                                    </select>
                                    <input type="text" name="documento" class="form-control" id="documento"
                                           aria-describedby="documento">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="genero" class="form-label">Género: </label>
                                <select name="genero" class="form-select" aria-label="genero">
                                    <option selected>Selecciona</option>
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">Binario</option>
                                    <option value="4">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección: </label>
                                <input type="text" class="form-control" name="direccion" id="direccion"
                                       aria-describedby="direccion">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo: </label>
                                <input type="text" name="correo" class="form-control" id="correo"
                                       aria-describedby="correo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="clave" class="form-label">Contraseña: </label>
                                <input type="password" class="form-control" name="clave" id="clave"
                                       aria-describedby="clave">
                            </div>
                        </div>
                    </div>
                    <div class="input-group d-flex pb-2 justify-content-center">
                        <button type="submit" class="form-control btn common-button rounded submit h-100"
                                style="max-width:200px !important">Registrarse
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center bg-light">
                <p class="text-muted">¡FurniCom para todos!</p>
            </div>
        </div>
    </div>
</div>