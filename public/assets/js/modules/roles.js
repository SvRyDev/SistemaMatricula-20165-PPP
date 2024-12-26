(function () {
  /////////////////////////////////////////////////////////////////////////////////////////////
  const base_url_module = base_url + "/roles";
  const form_module_id = "#form_roles";
  /////////////////////////////////////////////////////////////////////////////////////////////
 
    let table = $("#tabla_roles").DataTable({
      processing: true,
      serverSide: false,
      autoWidth: true,
      responsive: true,

      initComplete: function () {
        // Recorremos todas las columnas para agregar un campo de búsqueda
        this.api().columns();
      },

      ajax: {
        url: base_url + "/roles/show",
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
                    <button type="button" class="btn btn-warning text-white mdl-edit-btn btn-sm" data-id="${row.id_rol} "><span class="span_icon_edit"></span><span class="d-none d-lg-inline"><i class="bi bi-pencil-square"></i> </span></button>
                    <button type="button" class="btn btn-danger text-white mdl-delete-btn btn-sm" data-id="${row.id_rol} " ><span class="d-none d-lg-inline"><i class="bi bi-trash-fill"></i> </span></button>
                  `;
          },
        },
        { title: "id", data: "id_rol" },
        { title: "Codigo", data: "codigo" },

        { title: "Cargo", data: "descripcion" },
        { title: "Estado", data: "estado" },
      ],
    });


  //UPDATE & CREATE - Manejar el envío del formulario con AJAX
  $("#form_roles").on("submit", function (event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario

    var form = $(this);
    var url = base_url_module + "/store";

    // Verificar las validaciones antes de enviar el formulario
    if (!validateForm(form[0])) {
      return;
    }

    $.ajax({
      url: url,
      method: "POST",
      data: form.serialize(),
      success: function (response) {
        if (response.status === "success") {
          Swal.fire({
            title: "Registro Exitoso!",
            text: response.message,
            icon: "success",
          });
        } else {
          Swal.fire({
            icon: "error",
            text: "Error al actualizar " + module_name + "!",
          });
          console.log(response);
        }
      },
      error: function (xhr, status, error) {
        console.error(
          "Error al actualizar los datos de " + module_name + ":",
          error
        );
        alert(
          "Hubo un error al actualizar los datos de " +
            name_module +
            ". Inténtelo de nuevo."
        );
      },
    });
  });


   //Modal de Confirmacion para Eliminar Datos
   $("body").on("click", ".mdl-delete-btn", function () {
    var dataId = $(this).data("id");

    Swal.fire({
      title: "¿Eliminar registro?",
      text: "Estas por eliminar el cargo N° " + dataId ,
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Eliminar",
    }).then((result) => {
      if (result.isConfirmed) {
        deleteData(dataId);
      }
    });
  }); 

  //█ DELETE - Función AJAX para eliminar
  function deleteData(dataId) {
    $.ajax({
      url: base_url_module + "/delete/" + dataId,
      method: "POST",
      success: function (response) {
        if (response.status === "success") {
          Swal.fire(
            "¡Eliminado!",
            "El cargo ha sido eliminado.",
            "success"
          );
          table.ajax.reload(null, false); // Recargar la tabla
        } else {
          Swal.fire(
            "Error",
            "Hubo un error al eliminar el registro. Inténtelo de nuevo.",
            "error"
          );
        }
      },
      error: function (xhr, status, error) {
        console.error("Error al eliminar el registro:", error);
        Swal.fire(
          "Error",
          "Hubo un error al eliminar el registro. Inténtelo de nuevo.",
          "error"
        );
      },
    });
  }

  /////////////////////////////////////////////////////////////////////////////////////////////
})();
