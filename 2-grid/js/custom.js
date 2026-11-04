document.addEventListener("DOMContentLoaded", _ => {
  const nbToggler = document.querySelector("#nbToggler");
  const navbar = document.querySelector("#navbar");

  nbToggler.addEventListener("click", _ => {
    navbar.classList.toggle("show");
  });
});