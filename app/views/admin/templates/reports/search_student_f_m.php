<?php
require  __DIR__ . '/../../includes/header-right.php';
?>



<div class="mx-auto p-3 max-width--custom">
    <div class="container p-3">
        <!-- //////////////////////////////////////////////////////////////////////////// -->


        <div class="card mb-4 shadow-lg">

            <div class="card-body ">


                <div class="z-3">




                    <h5>CONSULTA FICHA DE MATRICULA</h5>
                    <br>

                    <form id="form-search--student">

                        <div class="col-md-12 col-lg-12">
                            <label for="est_full_name" class="form-label"><i class="bi bi-person-fill"></i> Dni o Codigo de Estudiante</label>
                            <input type="text" class="form-control form-control-lg" id="est_number" name="est_number" autocomplete="off" data-exactlength=8 data-maxlength=8 data-required data-numeric>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success"><i class="bi bi-search"></i> Buscar Estudiante</button>

                    </form>

                </div>



                <br>

                <div class="card shadow z-1 border border-secondary-subtle">
                    <div class="card-body">

                        <div class="d-flex justify-content-center align-items-center">
                            <div id="loading--spinner">

                            </div>
                        </div>


                        <div id="matricula--details">

                            <h5>RESULTADO DE ESTUDIANTE</h5>
                            <hr>

                            <div class="row g-3">


                                <div class="col-lg-6 col-md-12">
                                    <h6>id de Estudiante</h6>
                                    <span class="fw-light" id="fm_est_id"></span>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6>Nombre de Estudiante</h6>
                                    <span class="fw-light" id="fm_est_nombre_completo"></span>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h6>Documento de identidad</h6>
                                    <span class="fw-light" id="fm_est_doc_identidad"></span>
                                </div>


                                <div class="col-lg-6 col-md-12">
                                    <h6>Fecha Nacimiento</h6>
                                    <span class="fw-light" id="fm_est_fech_nacimiento"></span>
                                </div>


                            </div>
                            <hr>
                            <h6>Matriculas Realizadas</h6>
                            <table id="table-lista-matriculas-est" class="table ">
                                <thead>

                                    <tr>
                                        <th>Periodo</th>
                                        <th>Nivel</th>
                                        <th>Grado</th>
                                        <th>Situacion Matrícula</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>


                            </table>


                            <div></div>
                        </div>
                    </div>

                </div>
                <br>
                <button id="btn--export" class=" btn btn-danger"><i class="bi bi-file-earmark-pdf-fill"></i> Generar Ficha de Matricula</button>
            </div>


        </div>





        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>

</div>