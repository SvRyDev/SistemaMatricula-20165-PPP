<h2 data-aos="fade-right"><?= $data['title'] ?></h2>
<p data-aos="fade-right"> <?= $data['sub_title'] ?></p>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Estudiante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">




                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <i class="bi bi-gear-fill"></i> Datos de la Institución

                    </div>
                    <div class="card-body">


                        <p class="col-lg-6 col-md-12 card-title">Datos de la Organizacion</p>

                        <form action="<?= base_url() ?>/administration" id="formInstitucion" class="g-3 needs-validation" method="POST" novalidate>
             

                            <p class="col-lg-6 col-md-12 card-title mt-4">Datos de la Organizacion</p>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">



                                        <div class="mt-2 col-md-6">
                                            <label for="validationCustom01" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mt-2 col-md-6">
                                            <label for="validationCustom02" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02" value="asda" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mt-2 col-md-6">
                                            <label for="validationCustomUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 col-md-6">
                                            <label for="validationCustom03" class="form-label">City</label>
                                            <input type="text" class="form-control" id="validationCustom03" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="mt-2 col-md-3">
                                            <label for="validationCustom04" class="form-label">State</label>
                                            <select class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="mt-2 col-md-3">
                                            <label for="validationCustom05" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <p class="col-lg-6 col-md-12 card-title mt-4">Datos de la Organizacion</p>
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>


                            <div class="col-12 mt-4 text-end">

                                <button class="btn btn-primary" id="submitButton" type="submit" disabled><i class="bi bi-floppy-fill"></i> Guardar Cambios</button>
                            </div>

                        </form>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="enableFormCheckbox">
                            <label class="form-check-label" for="enableFormCheckbox">Activar Edición</label>
                        </div>




                    </div>
                </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<div class="contanier" data-aos="fade-right" data-aos-delay="50">
    <div class="row">
        <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" href="#students/new" class="btn-inicio btn btn-success">
                        Nuevo Estudiante
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>


                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <table id="tabla_estudiantes" class="display"></table>

                </div>
            </div>
        </div>
    </div>

</div>