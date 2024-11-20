(function () {

    // Manejar los clics en los enlaces del menú para cargar vistas dinámicamente
    $('.btn-inicio').on('click', function (e) {
      e.preventDefault(); // Evitar el comportamiento por defecto del enlace
      var view = $(this).attr('href').substring(1); // Obtener la parte de la URL después de '#'
      loadView(view); // Cargar la vista seleccionada
      console.log('haciendo clic en el boton interno :D');
  
  });












  const base_url_module = base_url + "/students/show";
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
            var input = $('<input type="text" class="column-search form-control" placeholder="Buscar ' + title + '">')
              .appendTo($(column.header()))  // Añadimos el input a la cabecera de cada columna
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
      language: {
        url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
      },

      //INGRESAR LA ESTRUCTURA DEL MODULO
      columns: [
        { title: "id", data: "estudiante_id" },
        { title: "Nombre", data: "nombre" },
        { title: "Apellidos", data: "apellido" },
        { title: "Edad", data: "edad" },
      ],


    });
  }

  loadData();

  // Funciones para manejar la edición y eliminación
  function editarRegistro(id) {
    alert("Editar registro con ID: " + id);
    // Implementa aquí la lógica de edición
  }

  function eliminarRegistro(id) {
    alert("Eliminar registro con ID: " + id);
    // Implementa aquí la lógica de eliminación
  }
})();
