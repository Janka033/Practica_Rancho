const frm = document.querySelector("#formulario");
document.addEventListener("DOMContentLoaded", function () {
  //Validar campos
  frm.addEventListener("submit", function (e) {
    e.preventDefault();
    if (
      frm.f_llegada.value == "" ||
      frm.f_salida.value == "" ||
      frm.habitacion.value == ""
    ) {
      alertaSW("Todos los campos son requeridos", "warning");
    } else {
      this.submit();
    }
  });
});
