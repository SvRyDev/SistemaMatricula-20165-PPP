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
            <a href="<?= base_url()?>/dashboard" class="nav-link active" aria-current="page">
                <i class="bi bi-bounding-box"></i><span>Inicio - Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url()?>/students" class="nav-link text-white">
                <i class="bi bi-people-fill"></i><span>Estudiantes</span>

            </a>
        </li>
        <li>
            <a href="#matriculasSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                <i class="bi bi-vector-pen"></i><span>Matrículas</span>
            </a>
        </li>
        <li>
            <a href="#reportesSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                <i class="bi bi-file-bar-graph-fill"></i> <span class="text-menu-list"> Reportes</span>
            </a>
        </li>
        <li>
            <a href="#administracionSubmenu" class="nav-link text-white" data-bs-toggle="collapse">
                <i class="bi bi-sliders2"></i><span>Administración</span>
            </a>
            <ul class="collapse" id="administracionSubmenu">
                <li><a href="#" class="nav-link text-white ms-4">Usuario del Sistema</a></li>
                <li><a href="#" class="nav-link text-white ms-4">Configuración</a></li>
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