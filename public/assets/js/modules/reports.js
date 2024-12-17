(function () {
//////////////////////////////////////////////////

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
        xhr.open("GET", base_url + "/public/assets/templates-exports/plantilla_nomina_matricula.xlsx", true);
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
    
                // Obtener la fila de plantilla (A12:AS12) que contiene la estructura
                var templateRow = worksheet.getRow(12);  // Fila 12 (A12:AS12)
                var templateCells = templateRow._cells;  // Obtener las celdas de la fila de plantilla
    
                // Obtener las celdas combinadas (rango de celdas combinadas) en la hoja
                var mergedRanges = worksheet.mergedCells;
    
                var init_row = 13;  // Empezar a pegar datos a partir de la fila 13
    
                // Recorrer las filas de la tabla HTML
                for (var i = 1; i < rows.length; i++) {  // Comenzar desde 1 para saltar el encabezado
                    var cells = rows[i].getElementsByTagName(i === 0 ? 'th' : 'td'); // Obtener las celdas de la fila
    
                    // Usar addRow para agregar una nueva fila en el archivo Excel
                    var newRow = worksheet.addRow([]);  // Añadir una fila vacía
    
                    // Copiar el formato de la fila de plantilla para cada nueva fila de datos
                    for (var colIndex = 0; colIndex < templateCells.length; colIndex++) {
                        var templateCell = templateCells[colIndex];
                        var newCell = newRow.getCell(colIndex + 1);  // La columna empieza desde 1
    
                        // Copiar el formato de la celda de plantilla a la nueva fila
                        newCell.style = templateCell.style;  // Copiar estilo (color, bordes, etc.)
                    }
    
                    // Asignar los valores de las celdas de la tabla HTML a las celdas correspondientes en Excel
                    for (var j = 0; j < cells.length; j++) {
                        // Asignar el valor de la celda HTML al valor de la celda Excel
                        var excelCell = newRow.getCell(j + 1);  // Columna comienza desde 1
    
                        // Asignar el valor de la celda HTML
                        excelCell.value = cells[j].innerText;
    
                        // Asignar el borde negro a cada celda
                        var borderStyle = {
                            top: { style: 'thin', color: { argb: 'FF000000' } },
                            left: { style: 'thin', color: { argb: 'FF000000' } },
                            bottom: { style: 'thin', color: { argb: 'FF000000' } },
                            right: { style: 'thin', color: { argb: 'FF000000' } }
                        };
                        excelCell.border = borderStyle;
                    }
    
                    // Aplicar las combinaciones de celdas a la nueva fila de datos
                    if (mergedRanges && mergedRanges.length > 0) {
                        mergedRanges.forEach(function(mergedRange) {
                            // Verificar si el rango de celdas combina con la nueva fila
                            var range = mergedRange.split(':');
                            var startCell = range[0];
                            var endCell = range[1];
    
                            var startRow = parseInt(startCell.replace(/[A-Z]/g, '')); // Extraer el número de la fila
                            var endRow = parseInt(endCell.replace(/[A-Z]/g, ''));
                            var startCol = startCell.replace(/[0-9]/g, '');  // Extraer la letra de la columna
                            var endCol = endCell.replace(/[0-9]/g, '');
    
                            // Aplicar las combinaciones de celdas a la nueva fila
                            if (startRow <= (init_row + i) && endRow >= (init_row + i)) {
                                worksheet.mergeCells(
                                    startCol + (init_row + i),
                                    startRow,
                                    endCol + (init_row + i),
                                    endRow
                                );
                            }
                        });
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
    

    $('#btn--export').on('click', function() {
        // Realizamos una solicitud AJAX
        $.ajax({
            url: base_url + '/export/exportFichaMatricula/1',  // La URL del endpoint del controlador
            type: 'GET',  // El tipo de solicitud (puede ser POST si prefieres enviar datos)
            success: function(response) {
                // Aquí puedes manejar la respuesta si necesitas algo adicional
                // En este caso, como el archivo PDF se descargará automáticamente, no es necesario
                console.log("PDF generado correctamente");
                window.location.href = base_url + '/export/exportFichaMatricula/1';
            },
            error: function(xhr, status, error) {
                // Manejo de errores si algo sale mal
                console.error("Hubo un error al generar el PDF: " + error);
            }
        });
    });
    





}) ();
