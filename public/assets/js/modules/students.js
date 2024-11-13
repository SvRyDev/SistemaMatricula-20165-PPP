function loadData() {

    // Hacer una solicitud AJAX para obtener los datos desde el servidor


    const container = document.getElementById("tabla_estudiantes");

    // Verificar si el contenedor existe
    if (!container) {
        console.error("Contenedor #tablaStudiantes no encontrado.");
        return; // No continuar si el contenedor no existe
    }

    // Limpiar el contenedor antes de renderizar
    container.innerHTML = '';
    console.log(base_url);

    let base_url_module = base_url + "/students";

    console.log(base_url_module);


    new gridjs.Grid({
        columns: [
            "Nombre",
            "Correo Electrónico",
            "Edad",
            {
                name: "Acciones",
                formatter: (cell, row) => {
                    return gridjs.html(`
                                <button onclick="editarRegistro(${row.cells[3].data})">Editar</button>
                                <button onclick="eliminarRegistro(${row.cells[3].data})">Eliminar</button>
                            `);
                }
            }
        ],
        server: {
            url: base_url_module,
            then: data => data.data.map(item => [item.nombre, item.correo, item.edad, item.id])
        },
        pagination: {
            enabled: true,
            limit: 5
        },
        search: true,
        language: {
            search: {
                placeholder: "Buscar..."
            },
            pagination: {
                previous: "Anterior",
                next: "Siguiente",
                showing: "Mostrando",
                results: () => "registros"
            }
        }
    }).render(container);


    ;

}
loadData();

// Funciones para manejar la edición y eliminación
function editarRegistro(id) {
    alert('Editar registro con ID: ' + id);
    // Implementa aquí la lógica de edición
}

function eliminarRegistro(id) {
    alert('Eliminar registro con ID: ' + id);
    // Implementa aquí la lógica de eliminación
}



