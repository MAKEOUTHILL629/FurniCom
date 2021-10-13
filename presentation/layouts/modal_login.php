<?php

?>

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
                <h3 class="text-center mb-4 fw-bold" style="color:var(--color-4);">Sign In</h3>
                <form action="index.php?pid=<?php echo base64_encode('controllers/authenticate.php')  ?>" METHOD="POST">
                    <div class="input-group input-group-lg py-2">
                        <span class="input-group-text d-flex justify-content-center" id="inputGroup-sizing-default"
                              style="width:40px"><i class="fas fa-id-card"></i></span>
                        <input type="email" name="email" class="form-control rounded-left" placeholder="Email">
                    </div>
                    <div class="input-group input-group-lg py-2">
                        <span class="input-group-text d-flex justify-content-center" id="inputGroup-sizing-default"
                              style="width:40px"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control rounded-left" placeholder="Password">
                    </div>
                    <div class="input-group input-group-lg py-3 px-5">
                        <button type="submit" class="form-control btn common-button rounded submit h-100 px-3">Inicia
                            sesión
                        </button>
                    </div>
                    <div class="form-group d-md-flex justify-content-center">
                        <a href="index.php?sid=<?php echo base64_encode("product_show") ?>">¿Olvidaste tu constraseña?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center bg-light">
                <p>¿No te has registrado?<a class="ps-2" href="#">Crea un perfil</a></p>
            </div>
        </div>
    </div>
</div>