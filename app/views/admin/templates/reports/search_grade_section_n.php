<?php
require  __DIR__ . '/../../includes/header-right.php';
?>



<div class="mx-auto p-3 max-width--custom">



    <div class="contanier p-3" data-aos="fade-right" data-aos-delay="50">


        <div class="card mb-4 shadow-lg">
            <div class="card-body">

                <h5>CONSULTA MATRICULADOS</h5>
                <br>


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">

                        <form id="form-search-group-students">

                            <div class="col-md-12 col-lg-12">
                                <label for="g_e_periodo" class="form-label"><i class="bi bi-calendar-date-fill"></i> Periodo Académico</label>
                                <select type="text" class="form-select form-select-lg shadow-sm" id="g_e_periodo" name="g_e_periodo">
                                </select>
                            </div>
                            <br>
                            <div class="col-md-12 col-lg-12">
                                <label for="g_e_nivel" class="form-label"><i class="bi bi-journal-album"></i> Nivel de Estudio</label>
                                <select type="text" class="form-select form-select-lg shadow-sm" id="g_e_nivel" name="g_e_nivel">
                               </select>
                            </div>
                            <br>
                            <div class="col-md-12 col-lg-12">
                                <label for="g_e_grado" class="form-label"><i class="bi bi-file-binary-fill"></i> Grado</label>
                                <select type="text" class="form-select form-select-lg shadow-sm" id="g_e_grado" name="g_e_grado">
                                </select>
                            </div>
                            <br>

                            <div class="col-md-12 col-lg-12">
                                <label for="g_e_seccion" class="form-label"><i class="bi bi-people-fill"></i> Seccion</label>
                                <select type="text" class="form-select form-select-lg shadow-sm" id="g_e_seccion" name="g_e_seccion">
                                 </select>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-success"><i class="bi bi-search"></i> Buscar Resultados</button>

                        </form>
<br>
                        
                        <button type="button" class="btn btn-success disabled" id="btn--export-excel"> <i class="bi bi-file-earmark-excel-fill"></i> Excel</button>
          
                        <button type="button" class="btn btn-primary disabled"> <i class="bi bi-file-earmark-word-fill"></i> Word</button>
                        <button type="button" class="btn btn-danger disabled"> <i class="bi bi-file-earmark-pdf-fill"></i> Pdf</button>

                       

                            <div class="card bg-secondary-subtle">
                                <div class="card-body">
                                    <div class="bg-white p-2">
                                        <table id="tabla_search_estudiantes" class="display "></table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>