(function () {

    // Manejar los clics en los enlaces del menú para cargar vistas dinámicamente
    $('.btn--action').on('click', function (e) {
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
            searching: false,  // Deshabilitar la búsqueda
            paging: false,     // Deshabilitar la paginación
            ordering: false,    // Deshabilitar el orden de las columnas
            scrollY: '400px', // Altura del cuerpo de la tabla (hace que se desplace)
            scrollCollapse: true, // Colapsa la tabla si hay pocos datos
        
        



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

        table.on('xhr', function (){
            $('#btn--export-excel').removeClass('disabled');
        })
    }

    loadData();



    $('#btn--export-excel').on('click', function (e) {

        // Cargar el archivo Excel
        var xhr = new XMLHttpRequest();
        xhr.open("GET", base_url + "/public/assets/templates-exports/Formato_Consultas.xlsx", true);
        xhr.responseType = "arraybuffer";

        xhr.onload = function (e) {
            var data = new Uint8Array(xhr.response);

            // Crear una instancia de Workbook de ExcelJS
            var workbook = new ExcelJS.Workbook();
            workbook.xlsx.load(data).then(function () {
                var worksheet = workbook.getWorksheet(1); // Obtener la primera hoja de trabajo

                // Capturar los datos de la tabla HTML
                var table = document.getElementById('tabla_estudiantes');
                var rows = table.getElementsByTagName('tr');

                var borderStyle = {
                    top: { style: 'thin', color: { argb: 'FF000000' } },  // Borde superior negro
                    left: { style: 'thin', color: { argb: 'FF000000' } }, // Borde izquierdo negro
                    bottom: { style: 'thin', color: { argb: 'FF000000' } }, // Borde inferior negro
                    right: { style: 'thin', color: { argb: 'FF000000' } } // Borde derecho negro
                };



                var init_row = 3;
                var init_col = 2;
                // Recorrer las filas de la tabla HTML
                for (var i = 0; i < rows.length; i++) {  // Comenzar desde 1 para saltar el encabezado
                    var cells = rows[i].getElementsByTagName(i === 0 ? 'th' : 'td'); // Obtener las celdas de la fila

                    // Asignar los valores de las celdas de la tabla a las celdas correspondientes en Excel
                    for (var j = 0; j < cells.length; j++) {

                        // Asignar el valor de la celda HTML al valor de la celda Excel
                        var excelCell = worksheet.getCell(String.fromCharCode(65 + j + init_col) + (i + init_row)); // Convertir a formato Excel (A2, B2, etc.)

                        // Asignar el valor de la celda HTML
                        excelCell.value = cells[j].innerText;

                        // Asignar el borde negro a cada celda
                        excelCell.border = borderStyle;
                    }



            }

                // Exportar el archivo modificado
                workbook.xlsx.writeBuffer().then(function (buffer) {
                var blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
                var link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'archivo_modificado.xlsx';
                link.click();
            });
        });
};

xhr.send();
    
    });







}) ();
