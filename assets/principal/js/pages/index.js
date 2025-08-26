const frm = document.querySelector("#formulario");
document.addEventListener("DOMContentLoaded", function () {
  $(".select-auto").select2({
    theme: "bootstrap-5",
  });
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
