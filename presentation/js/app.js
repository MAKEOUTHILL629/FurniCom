const btn = document.getElementById("btn-toggle");
let nav = document.getElementById("nav-container");

btn.addEventListener("click",()=>{
  nav.classList.toggle("animation-toggle-2");
  nav.classList.toggle("animation-toggle-1");
  btn.classList.toggle("animation-btn");
});



var owl = $('.owl-carousel');
owl.owlCarousel({
  loop:true,
  responsiveClass:true,
  autoplay:true,
  lazyLoad:true,
  center:true,
  stagePadding:0,
  autoplayTimeout:4000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1,
      },
      600:{
          items:2,
      },
      1000:{
          items:3,
          stagePadding: 100,
      }
  }
});
