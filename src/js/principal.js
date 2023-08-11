function submitForm(event) {
  event.preventDefault(); // Evita que el formulario se envíe y la página se recargue

  console.log("Evento submit capturado");

  buscarCartas();
}

function buscarCartas() {
  console.log("Función buscarCartas llamada");

  // Obtener el texto ingresado en el buscador
  var textoBusqueda = document.getElementById("buscador").value.toLowerCase();

  // Obtener todas las cartas
  var cartas = document.getElementsByClassName("cartamin");

  // Verificar si el texto de búsqueda está vacío
  if (textoBusqueda === "") {
    // Si está vacío, mostrar todas las cartas
    for (var i = 0; i < cartas.length; i++) {
      cartas[i].parentElement.style.display = "block"; // Mostrar toda la carta
    }
  } else {
    // Si hay un texto de búsqueda, ocultar todas las cartas
    for (var i = 0; i < cartas.length; i++) {
      cartas[i].parentElement.style.display = "none"; // Ocultar toda la carta
    }

    // Mostrar la carta que coincide con el texto buscado y moverla al principio
    for (var i = 0; i < cartas.length; i++) {
      var carta = cartas[i];
      var contenidoCarta = carta.innerText.toLowerCase();

      if (contenidoCarta.includes(textoBusqueda)) {
        carta.parentElement.style.display = "block"; // Mostrar la carta
        // Mover la carta al principio del contenedor
        carta.parentElement.parentElement.prepend(carta.parentElement);
      }
    }
  }
}
// Esta función controlará el cambio de tamaño de la imagen y mostrar/ocultar el texto descriptivo
document.querySelectorAll(".cardbase").forEach((card) => {
  card.addEventListener("click", function () {
    console.log("Clic en la tarjeta"); // Verifica que el evento se active

    this.classList.toggle("show-text");
    const cardImage = this.querySelector(".cardImage");
    const cardText = this.querySelector(".cardText");
    const consultLink = this.querySelector(".consultLink");

    if (cardImage.style.width === "100px") {
      cardImage.style.width = "150px";
      cardImage.style.height = "150px";
      cardText.style.display = "none";
      consultLink.style.display = "none";
    } else {
      cardImage.style.width = "100px";
      cardImage.style.height = "70px";
      cardText.style.display = "block";
      consultLink.style.display = "block";
    }
  });
});

// Aquí puedes seguir con el resto de tu código principal.js
// JavaScript para el desplazamiento horizontal de los testimonios
document.addEventListener("DOMContentLoaded", () => {
  const testimoniosContainer = document.getElementById("testimoniosContainer");

  if (testimoniosContainer) {
    let isDragging = false;
    let startX;
    let scrollLeft;

    testimoniosContainer.addEventListener("mousedown", (e) => {
      isDragging = true;
      startX = e.pageX - testimoniosContainer.offsetLeft;
      scrollLeft = testimoniosContainer.scrollLeft;
    });

    document.addEventListener("mouseup", () => {
      isDragging = false;
    });

    document.addEventListener("mouseleave", () => {
      isDragging = false;
    });

    testimoniosContainer.addEventListener("mousemove", (e) => {
      if (!isDragging) return;
      e.preventDefault();
      const x = e.pageX - testimoniosContainer.offsetLeft;
      const walk = (x - startX) * 2;
      testimoniosContainer.scrollLeft = scrollLeft - walk;
    });

    // Configuración del desplazamiento automático
    const speed = 1; // Velocidad del desplazamiento (ajusta este valor para controlar la velocidad)

    // Clonar los testimonios y añadirlos al final para lograr el efecto infinito
    testimoniosContainer.innerHTML += testimoniosContainer.innerHTML;

    let currentPosition = 0;

    // Función para mover la barra horizontal y los testimonios hacia la derecha
    function moveRight() {
      currentPosition += speed;

      if (currentPosition >= testimoniosContainer.scrollWidth / 2) {
        currentPosition = 0;
      }

      testimoniosContainer.scrollLeft = currentPosition;

      requestAnimationFrame(moveRight);
    }

    // Iniciar el desplazamiento automático
    moveRight();
  } else {
    console.error("El elemento testimoniosContainer no fue encontrado.");
  }
  //inicio de codigo de registro de sesion o de inicio
  const tabs = document.querySelectorAll(".tabreg");
  const forms = document.querySelectorAll(".formaregistro");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      tabs.forEach((t) => t.classList.remove("active"));
      tab.classList.add("active");
      const tabId = tab.getAttribute("data-tab");
      forms.forEach((form) => {
        form.classList.remove("active");
        if (form.id === tabId) {
          form.classList.add("active");
        }
      });
    });
  });

  const nextButtons = document.querySelectorAll(".next");
  const prevButtons = document.querySelectorAll(".prev");

  nextButtons.forEach((nextButton) => {
    nextButton.addEventListener("click", (event) => {
      const currentForm = event.target.closest(".formaregistro");
      const nextForm = currentForm.nextElementSibling;
      currentForm.classList.remove("active");
      nextForm.classList.add("active");
      tabs.forEach((tab) => {
        if (tab.getAttribute("data-tab") === nextForm.id) {
          tab.classList.add("active");
        }
      });
    });
  });

  prevButtons.forEach((prevButton) => {
    prevButton.addEventListener("click", (event) => {
      const currentForm = event.target.closest(".formaregistro");
      const prevForm = currentForm.previousElementSibling;
      currentForm.classList.remove("active");
      prevForm.classList.add("active");
      tabs.forEach((tab) => {
        if (tab.getAttribute("data-tab") === prevForm.id) {
          tab.classList.add("active");
        }
      });
    });
  });
  //final de codigo de registro de sesion o de inicio

  //inicio de codigo para buscar el servicio para las citas en linea
  // Obtener el valor del parámetro 'servicio' de la URL
  const urlParams = new URLSearchParams(window.location.search);
  const selectedService = urlParams.get("servicio");

  // Seleccionar automáticamente la opción correspondiente en el menú desplegable
  const selectElement = document.querySelector(".form-select");
  if (selectElement) {
    selectElement.value = selectedService;
  }
  //final de codigo para buscar el servioc para las citas en linea

  //codigo para php para la validacion de formulario de registros
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#tabreg-register");
    const cedulaInput = document.querySelector("#registerCedula");
    const nombreInput = document.querySelector("#registerUsername");
    const emailInput = document.querySelector("#registerEmail");
    const telefonoInput = document.querySelector("#registerPhone");
    const apellidosInput = document.querySelector("#registerLastName");
    const passwordInput = document.querySelector("#registerPassword");
    const imagenInput = document.querySelector("#registerProfileImage");
    const registerButton = document.querySelector(".next");
    function validateForm() {
      let isValid = true;
      if (cedulaInput.value.length < 6) {
        alert("Cédula debe tener al menos 6 caracteres");
        isValid = false;
      }
      if (nombreInput.value.length < 3) {
        alert("Nombre debe tener al menos 3 caracteres");
        isValid = false;
      }
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailInput.value)) {
        alert("Ingresa un email válido");
        isValid = false;
      }
      if (telefonoInput.value.length < 10) {
        alert("Teléfono debe tener al menos 10 caracteres");
        isValid = false;
      }
      return isValid;
    }
    registerButton.addEventListener("click", function (event) {
      if (!validateForm()) {
        event.preventDefault(); // Prevenir el envío del formulario si no es válido
      }
    });
  });
  const form = document.querySelector("#tabreg-register");
  form.addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault(); // Prevenir el envío del formulario si no es válido
    }
  });
});
