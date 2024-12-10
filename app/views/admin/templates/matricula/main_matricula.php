<h2 data-aos="fade-right"><?= $data['title'] ?></h2>
<p data-aos="fade-right"> <?= $data['sub_title'] ?></p>


<!-- Modal -->
<div class="modal fade" id="modalMatriculas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ratificar Matricula</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <label for="validationCustom04" class="form-label">Seleccionar Estudiantes</label>
                <select id="mySelect" class="form-select" style="width: 100%;">
                </select>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMatriculas">
    Ratificar Matrícula :D
</button>


<div class="card mb-4 shadow-lg">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-pencil-square"></i> <b> Apertura</b> - Nuevo Año
    </div>
    <div class="card-body">

        <div id="msg--is-ready" class="card mb-3 border border-success bg-success-subtle d-none">
            <div class="card-body  p-3">
                <h5 class="h5 m-0 text-success"><i class="bi bi-check2-square"></i> Matriculas 2024 Abiertas</h5>
            </div>
        </div>

        <div id="msg--isnt-ready" class="card mb-3 border border-danger bg-danger-subtle d-none">
            <div class="card-body  p-3">
                <h5 class="h5 m-0 text-danger"><i class="bi bi-exclamation-circle"></i> Matrículas no Abiertas</h5>
            </div>
        </div>



        <!-- Button trigger modal -->
        <button id="modal--new-anio" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-new-matricula">
            Abrir Matriculas - Nuevo Año
        </button>
        <button id="modal--finish-anio" type="button" class="btn btn-danger">
            Cerrar Año
        </button>

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
                            <button type="submit" class="btn btn-success" id="btn-aperturar-periodo" >Aperturar Matrícula</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <p class="card-text text-danger"><small class="text-muted"><i class="bi bi-exclamation-circle"></i> Nota: Matriculas 2024 ya está aperturado</small></p>
    </div>


</div>



<div class="card mb-4 shadow-lg">
    <div class="card-header bg-success text-white">
        <i class="bi bi-pencil-square"></i> <b> Nueva Matricula</b>
    </div>
    <div class="card-body">

        <button type="button" class="btn-inicio btn btn-warning"> Realizar Preinscripción</button>


        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Nueva Matrícula
            </button>
            <ul class="dropdown-menu " aria-labelledby="btnGroupDrop1">
                <li><button class="btn--action dropdown-item" href="#matricula/renovacion">Renovar Matricula</button></li>
                <li><button class="btn--action dropdown-item" href="#matricula/preinscripcion">Confirmar Reservas</button></li>
            </ul>
        </div>

    </div>
</div>



<div class="card mb-4 shadow-lg">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-pencil-square"></i> <b> Traslados</b>
    </div>
    <div class="card-body">

        <button type="button" class="btn-inicio btn btn-warning"> Traslado Interno</button>
        <button type="button" class="btn-inicio btn btn-warning"> Retiro por traslado</button>

    </div>
</div>


<div class="card mb-4 shadow-lg">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-pencil-square"></i> <b> Reservas y preinscripcion</b>
    </div>
    <div class="card-body">

        <button type="button" class="btn-inicio btn btn-warning"> Traslado Interno</button>
        <button type="button" class="btn-inicio btn btn-warning"> Retiro por traslado</button>





    </div>

    <a href="<?= base_url() ?>/reports/exportToExcel">asdasddasdasasdasd</a>
</div>