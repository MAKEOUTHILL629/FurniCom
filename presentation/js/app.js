let btn_plus = document.getElementById("plus");
let btn_substract = document.getElementById("substract");

let input_quantity = document.getElementById("input_cantidad");

if (input_quantity) {

  btn_substract.addEventListener('click', () => {
    input_quantity.value = (Number(input_quantity.value) - 1) <= 0 ? 1 : input_quantity.value - 1;
  });

  btn_plus.addEventListener('click', () => {
    input_quantity.value = Number(input_quantity.value) + 1;
  });
}


const btn = document.getElementById("btn-toggle");
let nav = document.getElementById("nav-container");
let shop_main = document.getElementById("shop-main");
let navbar = document.getElementById("nav-items");
let navbar_button = document.querySelector("#btn-toggle");

let val = false;

function load() {
  let loader = document.getElementById("cont-lds ");
  setTimeout(() => {
    loader.remove();
  }, 500);
}


navbar_button.addEventListener("click", () => {
  navbar_button.disabled = true;
  setTimeout(() => {
    navbar_button.disabled = false;
  }, 1000);
  navbar_button.disabled = true;
})



btn.addEventListener("click", () => {
  nav.classList.toggle("animation-toggle-2");
  nav.classList.toggle("animation-toggle-1");
  btn.classList.toggle("animation-btn");

  if (shop_main) {
    shop_main.classList.toggle("custom-padding");
  }
});

$(window).resize(function () {
  if (window.screen.width < 1000 && !val) {
    val = !val;
    let dropdown = document.getElementById("dropdown-nav");
    navbar.removeChild(dropdown);
    navbar.innerHTML = navbar.innerHTML + `
      <li class="nav-item sp-itm">
        <a class="nav-link" href="#">Literas <br><img src="presentation/img/icons/litera.svg" class="furniture-icon me-1" alt="icon_litera"></a>
      </li>
      <li class="nav-item sp-itm">
        <a class="nav-link" href="#">Mini bares <br><img src="presentation/img/icons/bar.svg" class="furniture-icon me-1" alt="icon_bar"></a>
      </li>
      <li class="nav-item sp-itm">
        <a class="nav-link" style="width:130px" href="#">Mesas de noche <br><img src="presentation/img/icons/mesilla-de-noche.svg" class="furniture-icon me-1" alt="icon_mesa_de_noche"></a>
      </li>
      <li class="nav-item sp-itm">
        <a class="nav-link" style="width:140px" href="#">Muebles de Televisor <br><img src="presentation/img/icons/televisor.svg" class="furniture-icon me-1" alt="icon_televisor"></a>
      </li>
      <li class="nav-item sp-itm">
        <a class="nav-link" href="#">Cómodas <br><img src="presentation/img/icons/armario.svg" class="furniture-icon me-1" alt="icon_armario"></a>
      </li>
      <li class="nav-item sp-itm">
        <a class="nav-link" href="#">Futones <br><img src="presentation/img/icons/futon.svg" class="furniture-icon me-1" alt="icon_futon"></a>
      </li>
    `;
  } else if (window.screen.width >= 1000 && val) {
    val = !val;
    const items = document.querySelectorAll(".sp-itm");
    console.log(items);

    for (item of items) {
      item.parentNode.removeChild(item);
    }

    navbar.innerHTML = navbar.innerHTML + `
    <li id="dropdown-nav"class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Otros
      </a>
      <ul class="dropdown-menu bg-light drop-cont px-2" style="z-index: 3;" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/litera.svg" class="furniture-icon me-1" alt="icon_litera"> Literas</a></li>
        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/bar.svg" class="furniture-icon me-1" alt="icon_bar"> Mini bares</a></li>
        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/mesilla-de-noche.svg" class="furniture-icon me-1" alt="icon_mesa_de_noche"> Mesas de noche</a></li>
        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/televisor.svg" class="furniture-icon me-1" alt="icon_televisor"> Muebles de Televisor</a></li>
        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/comoda.svg" class="furniture-icon me-1" alt="icon_comoda"> Cómodas</a></li>
        <li><a class="dropdown-item" href="#"><img src="presentation/img/icons/futon.svg" class="furniture-icon me-1" alt="icon_futon"> Futones </a></li>
      </ul>
    </li>
    `;
  }
});


var owl = $('.owl-gallery');
owl.owlCarousel({
  loop: true,
  responsiveClass: true,
  autoplay: true,
  lazyLoad: true,
  center: true,
  stagePadding: 0,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
      stagePadding: 100,
    }
  }
});

var owl_product = $('.owl-product');

if (owl_product) {
  owl_product.owlCarousel({
    items: 1,
    loop: false,
    center: true,
    URLhashListener: true,
    startPosition: 'URLHash'
  })
}



