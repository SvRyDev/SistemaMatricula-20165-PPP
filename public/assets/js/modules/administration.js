//MODULO aministration.js

// Función para ejecutar scripts específicos de la vista cargada
(function () {


  


    // Manejar los clics en los enlaces del menú para cargar vistas dinámicamente
    $('.btn-inicio').on('click', function (e) {
      e.preventDefault(); // Evitar el comportamiento por defecto del enlace
      var view = $(this).attr('href').substring(1); // Obtener la parte de la URL después de '#'
      loadView(view); // Cargar la vista seleccionada
      console.log('haciendo clic en el boton interno :D');
  
  });




  function init() {
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      "use strict";

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll(".needs-validation");

      // Loop over them and prevent submission
      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();

    // Función para habilitar/deshabilitar el formulario según el checkbox
    function toggleFormState() {
      const form = document.getElementById("formInstitucion");
      const inputs = form.querySelectorAll("input, select");
      const checkbox = document.getElementById("enableFormCheckbox");

      // Si el checkbox está marcado, habilita los campos
      if (checkbox.checked) {
        inputs.forEach((input) => {
          input.disabled = false;
        });
      } else {
        // Si el checkbox no está marcado, deshabilita los campos
        inputs.forEach((input) => {
          input.disabled = true;
          $("#submitButton").prop("disabled", true);
        });
      }
    }

    // Función para habilitar el botón de submit si hay cambios
    function enableSubmitIfChanged() {
      const form = document.getElementById("formInstitucion");
      const submitButton = document.getElementById("submitButton");
      const inputs = form.querySelectorAll("input, select");

      // Comprobar si algún campo tiene cambios
      let isChanged = false;

      inputs.forEach((input) => {
        if (input.value !== input.defaultValue) {
          isChanged = true;
        }
      });

      // Si algún campo se ha cambiado, habilita el botón submit
      if (isChanged) {
        submitButton.disabled = false;
      } else {
        submitButton.disabled = true;
      }
    }

    // Evento para detectar cambios en los campos
    document
      .querySelectorAll("#formInstitucion input, #formInstitucion select")
      .forEach((input) => {
        input.addEventListener("input", enableSubmitIfChanged);
      });

    // Ejecuta la función cada vez que se cambie el estado del checkbox
    document
      .getElementById("enableFormCheckbox")
      .addEventListener("change", toggleFormState);

    // Ejecutar la función para que el formulario esté deshabilitado al inicio

    toggleFormState();

    $("#formInstitucion").on("submit", function (event) {
      event.preventDefault();

      var form = $(this);
      var url = form.attr("action") + "/saveConfig";
      console.log("el url de la peticion es : " + url);

      $.ajax({
        url: url,
        method: "POST",
        data: form.serialize(),
        success: function (response) {
          if (response.status === "success") {
            console.log(response.status);
          } else {
            console.log("error al actualizar datos D:" + response.status);
          }

          toastr.success(
            "Se ha modificado los cambios :D.",
            "Cambios Guardados!!",
            {
              timeOut: 2000,
              positionClass: "toast-bottom-right",
            }
          );

          form.find("input, select, textarea, button").prop("disabled", true);
          $("#enableFormCheckbox").prop("checked", false);
        },
        error: function (xhr, status, error) {
          console.error("Error al actualizar los datos de : ", error);
        },
      });
    });
  }

  init();

  console.log("hola como estas");
})();
