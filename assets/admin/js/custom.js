function cerrarSesion() {
  Swal.fire({
    title: "Cerrar sesión?",
    text: "Estas seguro de que deseas cerrar sesión?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, salir!",
    cancelButtonText: "No, cancelar!",

  }).then((result) => {
    if (result.isConfirmed) {
      window.location = base_url + 'dashboard/salir';
    }
  });
}
