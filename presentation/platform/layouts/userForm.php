<!-- Formulario Creación, Actualización de Usuario -->
<div class="col-12  col-sm-10 col-md-12 col-lg-8">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary d-flex pt-4 justify-content-center align-items-center">
            <h4 class="font-weight-bold text-white text-center">Formulario Gestor</h4>
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