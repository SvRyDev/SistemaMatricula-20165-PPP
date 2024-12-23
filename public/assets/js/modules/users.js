(function () {
/////////////////////////////////////////////////////////////////////////////////////////////
const base_url_module = base_url + "/users";
const form_module_id = "#form_users";
/////////////////////////////////////////////////////////////////////////////////////////////
  function loadData() {
    let table = $("#tabla_usuarios").DataTable({
      processing: true,
      serverSide: false,
      autoWidth: true,
      responsive: true,

      initComplete: function () {
        // Recorremos todas las columnas para agregar un campo de búsqueda
        this.api()
          .columns()
      
      },

      ajax: {
        url: base_url + "/users/show",
        dataSrc: "",
      },
      language: {
        url:
          base_url + "/public/assets/libs/data-table-js/languaje/Spanish.json",
      },

      //INGRESAR LA ESTRUCTURA DEL MODULO
      columns: [
        {
          title: "Acciones",
          data: "null",
          render: function (data, type, row) {
            return `

                                        <button type="button" class="btn btn-warning text-white mdl-edit-btn btn-sm" ><span class="span_icon_edit"></span><span class="d-none d-lg-inline"><i class="bi bi-pencil-square"></i> </span></button>
            
                                        <button type="button" class="btn btn-danger text-white mdl-delete-btn btn-sm" data-id="" ><span class="d-none d-lg-inline"><i class="bi bi-trash-fill"></i> </span></button>
            <button type="button" class="btn btn-secondary text-white mdl-delete-btn btn-sm" data-id="" ><span class="d-none d-lg-inline"><i class="bi bi-file-earmark-fill"></i> </span></button>
          `;
          },
        },
        { title: "id", data: "id_usuario" },
        { title: "Propietaro", data: "nombre_completo" },
       
        { title: "Cargo", data: "rol_desc" },
        { title: "Estado", data: "activo" },
      ],
    });
  }

  loadData();

  $('.form--template').hide();

  $.ajax({
    url: base_url_module + "/loadForm", 
    type: "GET",
    dataType: "json",
    beforeSend: function () {
      $('.form--placeholder').show();
      $('.form--template').hide();

    },
    success: function(response){
      response.roles.forEach(function (item) {
        // Crear un nuevo elemento <option> para el primer select
        var option1 = $("<option></option>")
          .val(item.id_rol) // El valor de la opción
          .text(item.descripcion.toUpperCase()); // El texto que se mostrará en la opción

        $("#user_rol").append(option1);
      });

      $('.form--placeholder').hide();
      $('.form--template').fadeIn();

    },      
    error: function (xhr, status, error) {
      console.error(
        "Error al actualizar los datos de " + module_name + ":",
        error
      );
    },
  });

/////////////////////////////////////////////////////////////////////////////////////////////
  })();
  