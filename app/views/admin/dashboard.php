<?php require_once 'includes/header.php'; ?>






            <div class="contanier">
                <div class="row">
                    <div class="pb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="pb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="wrapper"></div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                awd joawdjoaisjd oaijw odiaj sodijaw odija osdjowidj oasijd oasijdo awdj
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <script>
                new gridjs.Grid({
                    columns: ["Name", "Email", "Phone Number"],
                    sort: true,
                    search: true,
                    pagination: {
                        enabled: true,
                        limit: 4
                    },
                    language: {
                        search: {
                            placeholder: 'Buscar...' // Cambia el texto del campo de búsqueda
                        },
                        sort: {
                            sortAsc: 'Ordenar de forma ascendente',
                            sortDesc: 'Ordenar de forma descendente'
                        },
                        pagination: {
                            previous: 'Anterior',
                            next: 'Siguiente',
                            showing: 'Mostrando',
                            results: () => 'registros',
                            to: 'a',
                            of: 'de'
                        },
                        loading: 'Cargando...',
                        noRecordsFound: 'No se encontraron registros',
                        error: 'Ha ocurrido un error al cargar los datos'
                    },
                    style: {
                        container: {
                            'font-size': '14px',
                        }
                    },
                    data: [
                        ["John", "john@example.com", "(353) 01 222 3333"],
                        ["Mark", "mark@gmail.com", "(01) 22 888 4444"],
                        ["Eoin", "eoin@gmail.com", "0097 22 654 00033"],
                        ["Sarah", "sarahcdd@gmail.com", "+322 876 1233"],
                        ["Afshin", "afshin@mail.com", "(353) 22 87 8356"]
                    ]
                }).render(document.getElementById("wrapper"));



                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>



</body>




<?php require_once 'includes/footer.php'; ?>
