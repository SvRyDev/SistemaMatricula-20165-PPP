<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral Responsivo</title>
    <!-- Enlace a Bootstrap 5 -->
    <link href="<?= assets() ?>/libs/bootstrap-v5.3.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= assets() ?>/css/styles-dashboard.css">
    <link rel="stylesheet" href="<?= assets() ?>/libs/bootstrap-icons-v1.11.3/bootstrap-icons.min.css">
</head>

<body>
    <div class="d-flex">
        <!-- Menú lateral -->

        <div class="sidebar-container">

            <input id="active-expand" type="checkbox">

            <nav id="sidebarMenu" class="d-flex flex-column flex-shrink-0 p-0 ">
                <div class="logo-nav">
                    <img class="ml-3 mr-3 mt-2 mb-2" src="<?= assets() ?>/fonts/logo-20165.png" width="50px" alt="">
                </div>


                <div class="title-nav">
                    <span id="toggleText1">MATRICULA VIRTUAL</span>
                    <br>
                    <span id="toggleText2">2024</span>
                </div>
                
                
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <i class="bi bi-bounding-box"></i><span>Inicio - Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#estudiantesSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                            <i class="bi bi-people-fill"></i><span>Estudiantes</span>

                        </a>
                        <ul class="collapse" id="estudiantesSubmenu">
                            <li><a href="#" class="nav-link ms-4">Registrar Estudiante</a></li>
                            <li><a href="#" class="nav-link ms-4">Consultar</a></li>
                            <li><a href="#" class="nav-link ms-4">Modificar</a></li>
                            <li><a href="#" class="nav-link ms-4">Eliminar</a></li>
                            <li><a href="#" class="nav-link ms-4">Listar Estudiantes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#matriculasSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                            <i class="bi bi-vector-pen"></i><span>Matrículas</span>
                        </a>
                        <ul class="collapse" id="matriculasSubmenu">
                            <li><a href="#" class="nav-link ms-4">Reservar Matrícula</a></li>
                            <li><a href="#" class="nav-link ms-4">Consultar Matrícula</a></li>
                            <li><a href="#" class="nav-link ms-4">Modificar Matrícula</a></li>
                            <li><a href="#" class="nav-link ms-4">Eliminar Matrícula</a></li>
                            <li><a href="#" class="nav-link ms-4">Ratificar Matrícula</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#reportesSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                            <i class="bi bi-file-bar-graph-fill"></i> <span class="text-menu-list"> Reportes</span>
                        </a>
                        <ul class="collapse" id="reportesSubmenu">
                            <li><a href="#" class="nav-link ms-4">Reporte de Matrícula</a></li>
                            <li><a href="#" class="nav-link ms-4">Reporte de Estudiantes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#administracionSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                            <i class="bi bi-sliders2"></i><span>Administración</span>
                        </a>
                        <ul class="collapse" id="administracionSubmenu">
                            <li><a href="#" class="nav-link ms-4">Usuario del Sistema</a></li>
                            <li><a href="#" class="nav-link ms-4">Configuración</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ayudaSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                            <i class="bi bi-question-circle-fill"></i> <span class="text-menu-list"> Ayuda </span>
                        </a>
                        <ul class="collapse" id="ayudaSubmenu">
                            <li><a href="#" class="nav-link ms-4">Guía de Usuario</a></li>
                        </ul>
                    </li>
                </ul>

                <button id="toggleSidebar" class="btn btn-outline-secondary mb-3" type="button">
                    <label for="active-expand"><i class="bi bi-list"></i><label>
                </button>
            </nav>

        </div>

        <!-- Contenido principal -->
        <div class="main-content-right flex-grow-1 p-3">
            <img  class="image-background-main" src="<?= assets() ?>/images/backgrounds/school-background.jpg" alt="">
            <h2>Bienvenido al Sistema de Matrículas</h2>
            <p>Selecciona una opción del menú para comenzar.</p>



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
                            HOLASDLAKSJDLK JLASKJD LAKDASJ DLKJASLD KJASL DKJALSDKJA SLDKJL 
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





        </div>
    </div>

    <!-- Bootstrap JS para la funcionalidad de collapse -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
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

</html>