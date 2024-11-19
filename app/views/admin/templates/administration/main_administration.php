<h2 data-aos="fade-right"><?= $data['title'] ?></h2>
<p data-aos="fade-right"> <?= $data['sub_title'] ?></p>



<div class="contanier" data-aos="fade-right" data-aos-delay="50">



    <div class="card ">
        <div class="card-header bg-success text-white">
            <i class="bi bi-gear-fill"></i> Datos de la Institución

        </div>
        <div class="card-body">


            <p class="col-lg-6 col-md-12 card-title">Datos de la Organizacion</p>

            <form action="<?= base_url() ?>/administration" id="formInstitucion" class="g-3 needs-validation" method="POST" novalidate>
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="mt-2 col-lg-4 col-md-6 col-sm-12">
                                <label for="nombreInstitucion" class="form-label">Nombre de la Institucion</label>
                                <input type="text" class="form-control" name="nombreInstitucion" id="nombreInstitucion" value="<?= $data['data_config']['NOMBRE_ENTIDAD']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mt-2 col-lg-4 col-md-6 col-sm-12">
                                <label for="nombreDirector" class="form-label">Nombre del Director</label>
                                <input type="text" class="form-control" name="nombreDirector" id="nombreDirector" value="<?= $data['data_config']['NOMBRE_JEFE'] ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mt-2 col-lg-4 col-md-6 col-sm-12">
                                <label for="correoInstitucion" class="form-label">Correo Electronico</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" name="correoInstitucion" id="correoInstitucion" aria-describedby="inputGroupPrepend" value="<?= $data['data_config']['CORREO_ENTIDAD'] ?>" required>
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

    <div class="row pt-4">
        <div class=" col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">

                <div class="card-header bg-success text-white">
                    <i class="bi bi-gear-fill"></i> Aforo
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-title"><b> Nivel Primaria</b> (1er a 6to Grado)</div>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">Aforo por Sección
                                    <input class="form-control w-25" type="text" value="13">
                                </li>
                            </ul>
                        </div>



                        <div class="col-lg-6">
                            <div class="card-title"><b>Nivel Secundaria</b> (1er a 5to grado)</div>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">Aforo por Sección
                                    <input class="form-control w-25" type="text" value="13">
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="col-12 mt-4 text-end">
                        <button class="btn btn-primary" id="sssdf" type="submit"><i class="bi bi-floppy-fill"></i> Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row pt-4">
        <div class=" col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">

                <div class="card-header bg-success text-white">
                    <i class="bi bi-gear-fill"></i> Gestión de Usuarios
                </div>

                <div class="card-body">
                    <h5 class="card-title">Gestion de Usuarios</h5>


                    <button type="button" class="btn-inicio btn btn-warning" href="#users/manage">
                        <i class="bi bi-people-fill"></i> Gestionar Usuarios
                    </button>


                </div>
            </div>
        </div>
    </div>



</div>