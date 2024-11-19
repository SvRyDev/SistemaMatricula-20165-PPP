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




<div class="contanier" data-aos="fade-right" data-aos-delay="50">


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <h5 class="card-title">
                        <i class="bi bi-house-door-fill"></i> Lista Matriculados
                    </h5>

                    <button type="button" class="btn btn-success"> <i class="bi bi-file-earmark-excel-fill"></i> Excel</button>
                    <button type="button" class="btn btn-primary"> <i class="bi bi-file-earmark-word-fill"></i> Word</button>
                    <button type="button" class="btn btn-danger"> <i class="bi bi-file-earmark-pdf-fill"></i> Pdf</button>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMatriculas">
                        Ratificar Matrícula :D



                    </button>


                    <div>
                        <table id="tabla_estudiantes" class="display"></table>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>