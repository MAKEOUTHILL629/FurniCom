<div class="modal fade" style="overflow-y:hidden !important;" id="registerModal" tabindex="-1" aria-labelledby="shopping_cart" aria-hidden="true">
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
        <form>
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
                  <select name="tipo_documento" class="form-select" style="max-width:100px" aria-label="tipo_documento">
                    <option selected>Doc. </option>
                    <option value="">CC</option>
                    <option value="">TI</option>
                    <option value="">CE</option>
                  </select>
                  <input type="text" class="form-control" id="documento" aria-describedby="documento">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
                <label for="genero" class="form-label">Género: </label>
                <select name="genero" class="form-select" aria-label="genero">
                  <option selected>Selecciona </option>
                  <option value="">Femenino</option>
                  <option value="">Masculino</option>
                  <option value="">Binario</option>
                  <option value="">Otro</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="direccion" class="form-label">Dirección: </label>
                <input type="text" class="form-control" id="direccion" aria-describedby="direccion">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="correo" class="form-label">Correo: </label>
                <input type="text" class="form-control" id="correo" aria-describedby="correo">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="clave" class="form-label">Contraseña: </label>
                <input type="password" class="form-control" id="clave" aria-describedby="clave">
              </div>
            </div>
          </div>
          <div class="input-group d-flex pb-2 justify-content-center">
            <button type="submit" class="form-control btn common-button rounded submit h-100" style="max-width:200px !important">Comprar</button>
          </div>
        </form>
      </div>
      <div class="modal-footer justify-content-center bg-light">
        <p class="text-muted">¡FurniCom para todos!</p>
      </div>
    </div>
  </div>
</div>