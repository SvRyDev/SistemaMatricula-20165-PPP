<?php
require  __DIR__ . '/../../includes/header-right.php';
?>


<div class="mx-auto p-3 max-width--custom">
    <div class="container p-3">
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <div class="row" data-aos="fade-right" data-aos-delay="50">



            <div class="col-sm-13 col-md-6 col-lg-3 ">
                <div class="card  bg-success mb-3 shadow">

                    <div class="card-body flex-column justify-content-center align-items-center text-center ">
                        <h1 class="card-title text-white m-0" style="transform: scale(1.5);"> <i class="bi bi-people-fill"></i> 2</h1>

                    </div>
                    <div class="card-footer bg-success-subtle text-center text-success-emphasis border-0" style="filter: brightness(.9)">
                        <h6 class="m-0  ">Estudiantes Registrados</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-13 col-md-6 col-lg-3 ">
                <div class="card bg-danger mb-3 shadow">

                    <div class="card-body flex-column justify-content-center align-items-center text-center">
                        <h1 class="card-title text-white m-0" style="transform: scale(1.5);"> <i class="bi bi-clipboard2-check-fill"></i> 2</h1>

                    </div>
                    <div class="card-footer bg-danger-subtle text-center text-danger-emphasis border-0" style="filter: brightness(.9)">
                        <h6 class="m-0  ">Matriculados</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-13 col-md-6 col-lg-3 ">
                <div class="card text-dark bg-warning mb-3 shadow">

                    <div class="card-body flex-column justify-content-center align-items-center text-center">
                        <h1 class="card-title text-white m-0" style="transform: scale(1.5);"> <i class="bi bi-person-workspace"></i> 1</h1>

                    </div>
                    <div class="card-footer bg-warning-subtle text-center text-warning-emphasis border-0" style="filter: brightness(.9)">
                        <h6 class="m-0  ">Profesores Registrados</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-13 col-md-6 col-lg-3 ">
                <div class="card text-dark bg-info mb-3 shadow">

                    <div class="card-body flex-column justify-content-center align-items-center text-center">
                        <h1 class="card-title text-white m-0" style="transform: scale(1.5);"> <i class="bi bi-inboxes-fill"></i> 1</h1>

                    </div>
                    <div class="card-footer bg-info-subtle text-center text-info-emphasis border-0" style="filter: brightness(.9)">
                        <h6 class="m-0  ">Reservas Solicitadas</h6>
                    </div>
                </div>
            </div>




            <div class="pb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="contents-charts">
                    <div class="card" data-aos="fade-right">
                        <div class="card-header ">
                            <h6 class="m-1">Tendencia Matrículas por Año</h6>
                        </div>
                        <div class="card-body">
                            <canvas id="chart_matriculados_by_anio"></canvas>
                            <p id="txt-loading"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="contents-charts">
                    <div class="card" data-aos="fade-right" data-aos-delay="100">
                        <div class="card-header text-center">
                            <h6 class="m-0">DISTRIBUCIÓN MATRICULAS POR GRADO</h6>
                        </div>
                        <div class="card-body">

                            <canvas id="chart_grado_seccion_by_anio"></canvas>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="form--placeholder row">


            <div class="col-6">
                <div class="card mb-4 border-0 shadow">
                    <div class="placeholder-glow ">
                        <div class="card-header ">
                            <div class="placeholder col-6">hola bb</div>
                        </div>
                        <div class="card-body">

                            <span class="placeholder col-12"><br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card mb-4 border-0 shadow">
                    <div class="placeholder-glow ">
                        <div class="card-header ">
                            <div class="placeholder col-6">hola bb</div>
                        </div>
                        <div class="card-body">

                            <span class="placeholder col-12"><br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </span>

                        </div>
                    </div>
                </div>
            </div>



        </div>


        <div class="row">

            <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">

                <div class="card bg-info-subtle mb-4">

                    <div class="card-body">

                        <div class="input-group">
                            <label class="input-group-text bg-secondary-subtle" for="inputGroupSelect01">
                                <i class="bi bi-calendar-check"></i>
                                <h6 class="m-1 m-0"> Año Escolar</h6>
                            </label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected value="1">2024</option>
                                <option value="2">2023</option>
                                <option value="3">2022</option>
                            </select>

                        </div>

                    </div>
                </div>





            </div>
        </div>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
</div>