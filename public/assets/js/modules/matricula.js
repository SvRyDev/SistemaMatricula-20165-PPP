//MODULO matricula.js

(function () {
  //////////////////////////////////////////
  // Manejar los clics en los enlaces del menú para cargar vistas dinámicamente
  $(".btn--action").on("click", function (e) {
    e.preventDefault(); // Evitar el comportamiento por defecto del enlace
    var view = $(this).attr("href").substring(1); // Obtener la parte de la URL después de '#'
    loadView(view); // Cargar la vista seleccionada
    console.log("haciendo clic en el boton interno :D");
  });

  const name_module = "matricula";
  const base_url_module = base_url + "/" + name_module;
  const form_module_id = "#COMPLETAR";

  console.log("la direccion completa es " + base_url_module);

  function loadData() {
    let table = $("#tabla_estudiantes").DataTable({
      processing: true,
      serverSide: false,
      autoWidth: true,
      responsive: true,

      initComplete: function () {
        // Recorremos todas las columnas para agregar un campo de búsqueda
        this.api()
          .columns()
          .every(function () {
            var column = this;
            var title = column.header().textContent; // Obtenemos el nombre de la columna para personalizar el filtro

            // Crear un input para cada columna de la tabla, sin necesidad de modificar el HTML de la tabla
            var input = $(
              '<input type="text" class="column-search form-control" placeholder="Buscar ' +
                title +
                '">'
            )
              .appendTo($(column.header())) // Añadimos el input a la cabecera de cada columna
              .on("keyup change clear", function () {
                if (column.search() !== this.value) {
                  column.search(this.value).draw(); // Aplicamos el filtro de búsqueda cuando se modifica el input
                }
              });
          });
      },

      ajax: {
        url: "" + base_url_module,
        dataSrc: "",
      },
      language: {},

      //INGRESAR LA ESTRUCTURA DEL MODULO
      columns: [
        {
          title: "Acciones",
          data: "null",
          render: function (data, type, row) {
            return `
                                                  <button type="button" class="btn btn-warning text-white mdl-edit-btn btn-sm" data-id="${data.idEstado}" data-bs-toggle="modal" data-bs-target=""><span class="span_icon_edit">${icon_edit}</span><span class="d-none d-lg-inline">Editar</span></button>
                      <button type="button" class="btn btn-danger text-white mdl-delete-btn btn-sm" data-id="${data.idEstado}" >${icon_delete}<span class="d-none d-lg-inline">Eliminar</span></button>
                    `;
          },
        },
        { title: "id", data: "estudiante_id" },
        { title: "Nombre", data: "nombre" },
        { title: "Apellidos", data: "apellido" },
        { title: "Edad", data: "edad" },
      ],
    });
  }

  loadData();

  function showSelectElement() {
    $("#mySelect").select2({
      placeholder: "Search for a student",
      allowClear: true,
      dropdownParent: $(".modal"),
      ajax: {
        url: base_url + "/matricula/showByName", // Reemplaza con tu URL
        dataType: "json",
        delay: 250, // Retraso en ms antes de realizar la solicitud para reducir la carga en el servidor
        data: function (params) {
          return {
            q: params.term, // 'params.term' contiene el término de búsqueda
          };
        },
        processResults: function (data) {
          // Procesa los resultados de acuerdo al formato JSON proporcionado
          return {
            results: data.map(function (item) {
              return {
                id: item.estudiante_id, // ID del estudiante
                text: `${item.nombre} ${item.apellido}`, // Texto que se muestra
                customData: item, // Se guarda todo el objeto para personalización
              };

              // Personalización del listado
              return;
            }),
          };
        },
      },
      // Personaliza las opciones del dropdown
      templateResult: function (item) {
        if (!item.id) {
          return item.text; // Retorna el texto para la opción predeterminada
        }
        return $(
          `<div>
                    <h5>${item.customData.estudiante_id} : ${item.customData.nombre}</h5>
                    <p><i>${item.customData.apellido}</i></p>
                </div>`
        );
      },
      // Personaliza cómo se muestra el valor seleccionado
      templateSelection: function (item) {
        return item.text || item.id; // Muestra el texto o el ID si no está definido
      },
    });
  }

  showSelectElement();

  const anio = new Date().getFullYear(); 

  function cargarAño(){
    $.ajax({
      url: base_url_module + "/show/" + anio, // La URL a la que se hace la solicitud
      type: "GET",
      dataType: "json",
      beforeSend: function () {
        $("#msg--is-ready").removeClass("d-block").addClass("d-none");
        $("#msg--isnt-ready").removeClass("d-block").addClass("d-none");
      },
  
      success: function (response) {
        
  
        console.log("respuserta de actualizar año " + response);
        
        if (response == 1) {
          $("#msg--is-ready").removeClass("d-none").addClass("d-block");
      
          
          $('#modal--new-anio').prop('disabled',true);
        } else {
          $("#msg--isnt-ready").removeClass("d-none").addClass("d-block");
  
        }
      },
      error: function (xhr, status, error) {
        // Esta función se ejecuta si ocurre un error en la solicitud
        console.error(error);
      },
    });
  
  }

  cargarAño();
  //UPDATE & CREATE - Manejar el envío del formulario con AJAX
  $("#form_new_year").on("submit", function (event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario

    var form = $(this);
    var url = base_url_module + "/activeMatricula/" + anio;

    // Verificar las validaciones antes de enviar el formulario
    if (!validateForm(form[0])) {
      return;
    }

    $.ajax({
      url: url,
      method: "POST",
      data: form.serialize(),
      success: function (response) {
        console.log(response);

        if (response.status === "success") {
          Swal.fire({
            title: "Operacion Exitosa!",
            text: response.message,
            icon: "success",
          });

          cargarAño();
          $("#modal-new-matricula").modal("hide");
        }
      },
      error: function (xhr, status, error) {
        console.error(
          "Error al actualizar los datos de " + name_module + ":",
          error
        );
        alert(
          "Hubo un error al actualizar los datos de " +
            name_module_singular +
            ". Inténtelo de nuevo."
        );
      },
    });
  });

  ////////////////////////////////////////////////////
})();
