<div class="filters-cont col-12 col-sm-12 col-md-4 col-lg-3 order-2 order-md-1">
  <div class="rounded border shadow-sm m-3 p-3 bg-white">
    <div class="d-flex justify-content-between">
      <div>
        <h4 class="text-muted w-auto pb-3 m-0">Filtros</h4>
        <h6 class="fw-bold pt-3">TODAS</h6>
        <p class="text-muted">3500 productos en Stock!</p>
      </div>
      <div class="shadow view-btn rounded-circle mx-1" id="gallery-view">
        <i class="far fa-list-alt filters-icon"></i>
      </div>
    </div>
    <hr>
    <h6 class="fw-bold py-3">PRECIO</h6>
    <div class="row">
      <div class="col">
        <input type="number" class="form-control" placeholder="Min value">
      </div>
      <p class="fs-2 m-0 p-0  w-auto">-</p>
      <div class="col">
        <input type="number" class="form-control" placeholder="Max value">
      </div>
    </div>
    <hr>
    <h6 class="fw-bold py-3">ORDENAR</h6>
    <div class="row">
      <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="order">
          <label class="form-check-label" for="order_option">
            Menor Precio
          </label>
        </div>
      </div>
      <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="order">
          <label class="form-check-label" for="order_option">
            Mayor Precio
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="order">
          <label class="form-check-label" for="order_option">
            Más Nuevos
          </label>
        </div>
      </div>
      <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="order">
          <label class="form-check-label" for="order_option">
            Más Antiguos
          </label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="order">
          <label class="form-check-label" for="order_option">
            A-Z
          </label>
        </div>
      </div>
      <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="order">
          <label class="form-check-label" for="order_option">
            Z-A
          </label>
        </div>
      </div>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="order">
      <label class="form-check-label" for="order_option">
        Más Vendidos
      </label>
    </div>
    <hr>
    <h6 class="fw-bold py-3">PRODUCTOS</h6>
    <div class="row justify-content-center">
      <button class="btn w-auto m-2 btn-filter active">10</button>
      <button class="btn w-auto m-2 btn-filter">20</button>
      <button class="btn w-auto m-2 btn-filter">30</button>
      <button class="btn w-auto m-2 btn-filter">No Limit</button>
    </div>
    <hr>
  </div>
  <nav aria-label="Page navigation example" class="mt-4 ">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>