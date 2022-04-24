// muestra u oculta navbar lateral(movil)
let btnNav = document.querySelector(".navbar-toggler");
let close = document.querySelector(".navbar-close");
let collapse = document.querySelector(".collapse");
btnNav.addEventListener("click", () => {
  collapse.classList.toggle("show");

  close.classList.toggle("show");
});

close.addEventListener("click", () => {
  close.classList.toggle("show");
  collapse.classList.toggle("show");
});

// Obtengo el nav
let navMain = document.querySelector(".navbar-main");
function stickyNav() {
  // se agrega la clase sticky
  if (window.pageYOffset > 100) {
    navMain.classList.add("sticky");
  } else {
    // se remumeve la clase sticky
    navMain.classList.remove("sticky");
  }
}
// cuando se haga scroll, funcion anónima de flecha
window.onscroll = () => {
  stickyNav();
};

// Fecha y hora
const startTime = () => {
  // Funcion de flecha con const
  let reloj = document.getElementById("reloj");
  let fecha = document.getElementById("fecha");

  reloj.innerHTML = moment().format("hh:mm:ss ");
  fecha.innerHTML = moment().format("DD/MM/YYYY");
  setTimeout("startTime()", 500);
};
startTime();

// Validación de formulario de contacto
function validateForm(event) {
  event.preventDefault();
  let formValue = document.forms["form-contacto"]["name_contact"].value;
  let nameError = document.querySelector("#nameError");
  if (formValue == "") {
    nameError.textContent = "Este campo no puede estar vacío";
    return false;
  } else {
    nameError.textContent = "";
    return true;
  }
}
