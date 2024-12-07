<h2 data-aos="fade-right"><?= $data['title'] ?></h2>
<p data-aos="fade-right"> <?= $data['sub_title'] ?></p>



<div class="contanier" data-aos="fade-right" data-aos-delay="50">



    <div class="row g-3">

        <div class="col-12">
            <div class="card">
                <div class="card-body">




                    <button class="btn btn-primary" id="submitButton" type="submit" disabled><i class="bi bi-floppy-fill"></i> Guardar Cambios</button>




                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableFormCheckbox">
                        <label class="form-check-label" for="enableFormCheckbox">Activar Edición</label>
                    </div>


                </div>
            </div>

        </div>


        <div class="col-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <i class="bi bi-gear-fill"></i> Datos de la Institución

                </div>
                <div class="card-body">

                    <form action="<?= base_url() ?>/administration" id="formInstitucion" class="g-3 needs-validation" method="POST" novalidate>
                    </form>


                    <div class="row g-3">

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="nombreInstitucion" class="form-label form-label-sm">Nombre de la Institucion</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" name="nombreInstitucion" id="nombreInstitucion" value="<?= $data['data_config']['NOMBRE_ENTIDAD']; ?>" data-maxlength=4 required />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="nombreDirector" class="form-label">Nombre del Director</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" name="nombreDirector" id="nombreDirector" value="<?= $data['data_config']['NOMBRE_JEFE'] ?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Codigo</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" placeholder="." name="▓▓" id="▓▓" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Código Modular</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" placeholder="." name="▓▓" id="▓▓" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>





                    </div>



                </div>
            </div>
        </div>



        <div class="col-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <i class="bi bi-gear-fill"></i> Datos de la Institución

                </div>
                <div class="card-body">

                    <form action="<?= base_url() ?>/administration" id="formInstitucion" class="g-3 needs-validation" method="POST" novalidate>
                    </form>


                    <div class="row g-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Modalidad</label>
                            <select class="form-select form-select-sm shadow-sm" name="▓▓" id="▓▓">
                                <option value="EBR">EBR - Educación Básica Regular</option>
                                <option value="EBA">EBA - Educación Básica Alternativa</option>
                            </select>
                            <div class="valid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Forma</label>
                            <select class="form-select form-select-sm shadow-sm" name="▓▓" id="▓▓">
                                <option value="EBR">Esc - Escolarizado</option>
                                <option value="EBA">NoEsc - No Escolarizado</option>
                            </select>
                            <div class="valid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Gestión</label>
                            <select class="form-select form-select-sm shadow-sm" name="▓▓" id="▓▓">
                                <option value="EBR">PGD - Pública de Gestión Directa</option>
                                <option value="EBR">PGP - Pública de Gestión Privada</option>
                                <option value="EBR">PR - Privada</option>
                            </select>
                            <div class="valid-feedback">
                                Please choose a username.
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control shadow-sm" name="▓▓" id="▓▓" aria-describedby="inputGroupPrepend" value="" placeholder="Distrito" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control shadow-sm" name="▓▓" id="▓▓" aria-describedby="inputGroupPrepend" value="<?= $data['data_config']['CORREO_ENTIDAD'] ?>" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>



                    </div>




                    <div class="col-12 mt-4 text-end">

                        <button class="btn btn-primary" id="submitButton" type="submit" disabled><i class="bi bi-floppy-fill"></i> Guardar Cambios</button>
                    </div>



                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableFormCheckbox">
                        <label class="form-check-label" for="enableFormCheckbox">Activar Edición</label>
                    </div>




                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <i class="bi bi-gear-fill"></i> Ubicacion de la Institucion
                </div>

                <div class="card-body">

                    <div class="row g-3">


                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="▓▓" class="form-label">Direccion</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" name="▓▓" id="▓▓" value="Jdawod oijawodiad " required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="▓▓" class="form-label">Centro Poblado</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" name="▓▓" id="▓▓" value="" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Distrito</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" name="▓▓" id="▓▓" value="" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Provincia</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" name="▓▓" id="▓▓" value="" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="▓▓" class="form-label">Departamento</label>
                            <input type="text" class="form-control form-control-sm rounded-0 shadow-sm" name="▓▓" id="▓▓" value="" required>
                            <div class="invalid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="mt-2 col-md-6">
                            <label for="validationCustom01" class="form-label">Centro Poblado</label>
                            <input type="text" class="form-control shadow-sm" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="mt-2 col-md-6">
                            <label for="validationCustom02" class="form-label">Distrito</label>
                            <input type="text" class="form-control shadow-sm" id="validationCustom02" value="asda" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="mt-2 col-md-6">
                            <label for="validationCustomUsername" class="form-label">Provincia</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control shadow-sm" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 col-md-6">
                            <label for="validationCustom03" class="form-label">Departamento</label>
                            <input type="text" class="form-control shadow-sm" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                    </div>



                </div>
            </div>

        </div>

        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
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