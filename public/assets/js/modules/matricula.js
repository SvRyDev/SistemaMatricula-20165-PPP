//MODULO matricula.js

(function () {
    const base_url_module = base_url + "/matricula/show";
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



    function showSelectElement() {

        $('#mySelect').select2({
            placeholder: 'Search for a student',
            allowClear: true,
            dropdownParent: $('.modal'),
            ajax: {
                url: base_url + "/matricula/showByName", // Reemplaza con tu URL
                dataType: 'json',
                delay: 250, // Retraso en ms antes de realizar la solicitud para reducir la carga en el servidor
                data: function (params) {
                    return {
                        q: params.term // 'params.term' contiene el término de búsqueda
                    };
                },
                processResults: function (data) {
                    // Procesa los resultados de acuerdo al formato JSON proporcionado
                    return {
                        results: data.map(function (item) {
                            return {
                                id: item.estudiante_id, // ID del estudiante
                                text: `${item.nombre} ${item.apellido}`, // Texto que se muestra
                                customData: item // Se guarda todo el objeto para personalización
                            };

                            // Personalización del listado
                            return

                        })
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
            }
        });
    }




    showSelectElement();




})();
