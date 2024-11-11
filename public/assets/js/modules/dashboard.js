// Función para ejecutar scripts específicos de la vista cargada
function executeViewSpecificScripts() {
  // Código para la vista "dashboard"

  (function () {


    // Código del gráfico
    const ctx = document.getElementById("myChart").getContext("2d");
    const myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Enero", "Febrero", "Marzo"],
        datasets: [
          {
            label: "Estudiantes",
            data: [10, 20, 30],
            backgroundColor: "rgba(75, 192, 192, 0.2)",
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
      },
    });

 

    // Inicializar Grid.js
    new gridjs.Grid({
      columns: ["Name", "Email", "Phone Number"],
      sort: true,
      search: true,
      pagination: {
        enabled: true,
        limit: 4,
      },
      language: {
        search: {
          placeholder: "Buscar...",
        },
        sort: {
          sortAsc: "Ordenar de forma ascendente",
          sortDesc: "Ordenar de forma descendente",
        },
        pagination: {
          previous: "Anterior",
          next: "Siguiente",
          showing: "Mostrando",
          results: () => "registros",
          to: "a",
          of: "de",
        },
        loading: "Cargando...",
        noRecordsFound: "No se encontraron registros",
        error: "Ha ocurrido un error al cargar los datos",
      },
      style: {
        container: {
          "font-size": "14px",
        },
      },
      data: [
        ["John", "john@example.com", "(353) 01 222 3333"],
        ["Mark", "mark@gmail.com", "(01) 22 888 4444"],
        ["Eoin", "eoin@gmail.com", "0097 22 654 00033"],
        ["Sarah", "sarahcdd@gmail.com", "+322 876 1233"],
        ["Afshin", "afshin@mail.com", "(353) 22 87 8356"],
      ],
    }).render(document.getElementById("wrapper"));
  })();
}

executeViewSpecificScripts();
