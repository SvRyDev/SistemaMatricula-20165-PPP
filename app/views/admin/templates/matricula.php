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

                <label for="validationCustom04" class="form-label">State</label>
                <select id="mySelect" class="form-select" style="width: 100%;">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
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
    <div class="card mb-3">
        <div class="card-body ">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">


                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-event"></i> Año Académico</span>
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1" selected>2024</option>
                            <option value="2">2023</option>
                            <option value="3">2022</option>
                        </select>
                    </div>



                </div>


            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <h5 class="card-title">
                        <i class="bi bi-house-door-fill"></i> Lista Matriculados
                    </h5>

                    <button type="button" class="btn btn-primary">Reservar Matricula</button>

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