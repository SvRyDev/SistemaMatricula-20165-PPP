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

        <div class="card mb-2 bg-success-subtle">

            <div class="card-body">
                <h5 class="h5 text-success"> <i class="bi bi-check2-square"></i> Matriculas 2024 Abiertas</h5>
            </div>
        </div>

        <div class="card mb-2 bg-danger-subtle  ">

            <div class="card-body">
                <h5 class="h5 text-danger"> <i class="bi bi-exclamation-circle"></i> Matrículas no Abiertas</h5>
            </div>
        </div>



        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-new-matricula">
            Abrir Matriculas - Nuevo Año
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modal-new-matricula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva Matrícula</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="label-form fw-bold" for="">Año Educativo</label>
                        <p>2024</p>
                        <label class="label-form fw-bold" for="">Vacantes por Aula</label>
                        <input type="text" class="form-control" placeholder="Ingrese numero de aforo">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Aperturar Matrícula</button>
                    </div>
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

    <a href="<?= base_url()?>/reports/exportToExcel">asdasddasdasasdasd</a>
</div>

