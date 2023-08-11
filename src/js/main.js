// Registro de Usuarios
document
  .getElementById("registration-form")
  .addEventListener("submit", function (event) {
    const formFields = this.querySelectorAll("input[required]");
    let valid = true;

    formFields.forEach(function (field) {
      if (!field.value) {
        valid = false;
      }
    });

    if (!valid) {
      event.preventDefault();
      alert("Por favor, complete todos los campos requeridos.");
    }
  });

// Mostrar el modal
document.addEventListener("DOMContentLoaded", function () {
  // Mostrar el modal al cargar la página si el registro fue exitoso
  var registroExitosoModal = new bootstrap.Modal(
    document.getElementById("registroExitosoModal")
  );
  registroExitosoModal.show();
});
