const frm = document.querySelector("#formulario");
const terminos = document.querySelector("#chb2");
document.addEventListener("DOMContentLoaded", function () {
  frm.addEventListener("submit", function (e) {
    e.preventDefault();
    if (
      frm.nombre.value == "" ||
      frm.apellido.value == "" ||
      frm.usuario.value == "" ||
      frm.correo.value == "" ||
      frm.clave.value == "" ||
      frm.confirmar.value == ""
    ) {
      alertaSW("TODOS LOS CAMPOS SON REQUERIDOS", "warning");
    } else if (terminos.checked) {
      alertaSW("ACEPTAR LOS TERMINOS Y CONDICIONES", "warning");
    } else {
      const http = new XMLHttpRequest();

      const url = base_url + "registro/crear";

      http.open("POST", url, true);
      http.send(new FormData(frm));

      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
        }
      };
    }
  });
});
