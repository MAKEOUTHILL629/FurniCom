<!-- Formulario Creación, Actualización de Producto -->
<div class="col-12  col-sm-10 col-md-12 col-lg-8">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary d-flex pt-4 justify-content-center align-items-center">
            <h4 class="font-weight-bold text-white text-center">Formulario Producto</h4>
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