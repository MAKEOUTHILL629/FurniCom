const btn = document.getElementById("btn-toggle");
let nav = document.getElementById("nav-container");

btn.addEventListener("click",()=>{
  nav.classList.toggle("animation-toggle-2");
  nav.classList.toggle("animation-toggle-1");
  btn.classList.toggle("animation-btn");
});