<nav id="sidebarMenu" class="d-flex flex-column flex-shrink-0 p-0 shadow-lg">
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
            <a href="#dashboard" class="nav-link m-0 active bg-transparent shadow" aria-current="page">
                <i class="bi bi-bounding-box"></i><span>Inicio - Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#students" class="nav-link m-0 text-white">
                <i class="bi bi-people-fill"></i><span>Estudiantes</span>

            </a>
        </li>
        <li>
            <a href="#matricula" class="nav-link m-0 text-white" data-bs-toggle="collapse">
                <i class="bi bi-vector-pen"></i><span>Matrículas</span>
            </a>
        </li>
        <li>
            <a href="#reports" class="nav-link m-0 text-white" data-bs-toggle="collapse">
            <i class="bi bi-search"></i> <span class="text-menu-list"> Consultas</span>
            </a>
        </li>
        <li>
            <a href="#administration" class="nav-link m-0 text-white" data-bs-toggle="collapse">
            <i class="bi bi-gear-fill"></i><span>Administración</span>
            </a>
        </li>
        <li>
            <a href="#ayudaSubmenu" class="nav-link m-0 text-white" data-bs-toggle="collapse">
                <i class="bi bi-question-circle-fill"></i> <span class="text-menu-list"> Ayuda </span>
            </a>
        </li>
    </ul>

    <button id="toggleSidebar" class="btn btn-outline-secondary mb-3" type="button">
        <label for="active-expand"><i class="bi bi-list"></i><label>
    </button>
</nav>