<?php
require  __DIR__ . '/../../includes/header-right.php';
?>



<div class="mx-auto p-3 max-width--custom">
    <div class="contanier p-3" data-aos="fade-right" data-aos-delay="50">


        <div class="row g-3">

            <div class="col-12">
                <div class="card shadow">

                    <div class="card-body d-flex justify-content-between align-items-center">


                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="enableFormCheckbox">
                            <label class="form-check-label" for="enableFormCheckbox">Activar Edición</label>
                        </div>

                        <button class="btn btn-primary" id="submitButton" type="submit" disabled>
                            <i class="bi bi-floppy-fill"></i> Guardar Cambios
                        </button>


                    </div>

                </div>

            </div>

            <form action="" id="form_config" class="needs-validation" method="POST" novalidate>

                <div class="col-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header bg-success text-white ">
                            <i class="bi bi-gear-fill"></i> Datos Generales

                        </div>
                        <div class="card-body bg-success-subtle">

                            <div class="m-0 p-3 row g-3 bg-white text-success-emphasis rounded-5">

                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nombreInstitucion" name="nombreInstitucion" placeholder="" value="<?= $data['data_config']['NOMBRE_ENTIDAD']; ?>" data-uppercase required>

                                        <label for="nombreInstitucion">Institución Educativa</label>
                                        <div class="invalid-feedback position-relative">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>


                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nombreDirector" name="nombreDirector" placeholder="" value="<?= $data['data_config']['NOMBRE_JEFE'] ?>" data-uppercase>
                                        <label for="nombreDirector">Director</label>
                                        <div class="invalid-feedback position-relative">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="codigoModular" name="codigoModular" placeholder="" value="<?= $data['data_config']['CODIGO_MODULAR'] ?>" data-numeric data-maxlength=7>
                                        <label for="codigoModular">Código Modular</label>
                                        <div class="invalid-feedback position-relative">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-gear-fill"></i> Datos de la Institución

                        </div>
                        <div class="card-body bg-success-subtle ">
                            <div class="m-0 p-3 row g-3 bg-white text-success-emphasis rounded-5">

                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-4">
                                        <select class="form-select" name="config_modalidad" id="config_modalidad">

                                        </select>
                                        <label for="config_modalidad">Modalidad</label>
                                        <div class="invalid-feedback position-relative">
                                            Looks good!
                                        </div>

                                    </div>
                                </div>

                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-4">
                                        <select class="form-select shadow-sm" name="config_forma" id="config_forma">

                                        </select>
                                        <label for="config_forma">Forma</label>
                                        <div class="invalid-feedback position-relative">
                                            Looks good!
                                        </div>

                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-gear-fill"></i> Ubicacion de la Institucion
                        </div>

                        <div class="card-body bg-success-subtle">

                            <div class="m-0 p-3 row g-3 bg-white text-success-emphasis rounded-5">

                                <div class="row g-3">


                                    <div class=" col-lg-12 col-md-12 col-sm-12 mt-0">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="config_direccion" name="config_direccion" placeholder="" value="" data-uppercase required>
                                            <label for="config_direccion">Direccion</label>
                                            <div class="invalid-feedback position-relative">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="config_centro_poblado" name="config_centro_poblado" placeholder="" value="" data-uppercase required>
                                            <label for="config_centro_poblado">Centro Poblado</label>
                                            <div class="invalid-feedback position-relative">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="config_distrito" name="config_distrito" placeholder="" value="" data-uppercase required>
                                            <label for="config_distrito">Distrito</label>
                                            <div class="invalid-feedback position-relative">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="config_provincia" name="config_provincia" placeholder="" value="" data-uppercase required>
                                            <label for="config_provincia">Provincia</label>
                                            <div class="invalid-feedback position-relative">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control" id="config_departamento" name="config_departamento" placeholder="" value="" data-uppercase required>
                                            <label for="config_departamento">Departamento</label>
                                            <div class="invalid-feedback position-relative">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </form>



        </div>


        <div class="row">
            <div class=" col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card shadow" >

                    <div class="card-header bg-success text-white">
                        <i class="bi bi-gear-fill"></i> Usuarios
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">

                                <button type="button" class="btn--action btn btn-warning" href="#users">
                                    <i class="bi bi-people-fill"></i> Gestionar Usuarios
                                </button>

                            </div>


                        </div>






                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card shadow">

                    <div class="card-header bg-success text-white">
                        <i class="bi bi-gear-fill"></i> Cargos
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">

                                <button type="button" class="btn--action btn btn-warning" href="#roles">
                                    <i class="bi bi-people-fill"></i> Gestionar Cargos
                                </button>

                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>



    </div>
</div>