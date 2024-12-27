<?php
require  __DIR__ . '/../../includes/header-right.php';
?>


<div class="mx-auto p-3 max-width--custom">
    <div class="container p-3">
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <div class=" col-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="card text-white bg-primary mb-3 shadow">

                <div class="card-body m-0 p-3 text-center">
                    <h4 class="m-0" id="">GESTION MATRICULAS</h4>

                </div>
            </div>
        </div>

        <div id="spinner--ready-year" class="card mb-3 border border-secondary-subtle bg-secondary-subtle">
            <div class="card-body p-3">

                <div class="spinner-border spinner-border-sm" role="status">
                    <br>
                    <span class="visually-hidden">Loading...</span>
                    <br>
                </div>

            </div>
        </div>


        <div id="msg--is-ready" class="card mb-3 bg-success text-center shadow">
            <div class="card-body  p-3 ">
                <br>
                <h2 class="h2 m-0 text-white "><i class="bi bi-check2-square "></i> Matriculas <?= Date('Y') ?> Abiertas</h2>
                <br>
            </div>
        </div>

        <div id="msg--isnt-ready" class="card mb-3 border border-danger bg-danger text-center">
            <div class="card-body  p-3 ">
                <br>
                <h2 class="h2 m-0 text-white"><i class="bi bi-exclamation-circle"></i> Matrículas <?= Date('Y') ?> no Aperturadas</h2>
                <br>
            </div>
        </div>






        <div class="card mb-4 shadow-lg">

            <div class="card-body ">

                <!-- Button trigger modal -->
                <button id="modal--new-anio" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-new-matricula">
                    Abrir Matriculas - Nuevo Año
                </button>
                <!--
                <button id="modal--finish-anio" type="button" class="btn btn-danger">
                    Cerrar Año
                </button>
-->
                <!-- Modal -->
                <div class="modal fade" id="modal-new-matricula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nueva Matrícula</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="form_new_year" action="" class="">
                                <div class="modal-body">
                                    <label class="label-form fw-bold" for="anio-new-periodo">Año Académico</label>
                                    <input type="text" class="form-control" id="anio-new-periodo" name="anio-new-periodo" value="2024" data-required data-numeric data-maxlength=4>

                                    <label class="label-form fw-bold" for="anio-vacantes">Vacantes por Aula</label>
                                    <input type="text" class="form-control" id="anio-vacantes" name="anio-vacantes" placeholder="Ingrese numero de aforo" data-required data-numeric data-maxlength=3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success" id="btn-aperturar-periodo">Aperturar Matrícula</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <p id="small-msg" class="card-text text-danger"><small class="text-muted"><i class="bi bi-exclamation-circle"></i> Nota: Matriculas <?= Date('Y') ?> ya está aperturado</small></p>
            </div>


        </div>



        <div class="card mb-4 shadow-lg">
            <div class="card-header bg-success text-white">
                <i class="bi bi-pencil-square"></i> <b> Nueva Matricula</b>
            </div>
            <div class="card-body">

            <!--
                <button type="button" class="btn-inicio btn btn-warning"> Ratificacion de Estudiantes </button>
                <button type="button" class="btn-inicio btn btn-warning"> Realizar Preinscripción</button>
-->
                <button id="btn---new--matricula" class="btn--action btn btn-warning" href="#matricula/preinscripcion">Nueva Matricula</button>

                            </div>
        </div>



    </div>
</div>

<!-- //////////////////////////////////////////////////////////////////////////// -->
</div>

</div>