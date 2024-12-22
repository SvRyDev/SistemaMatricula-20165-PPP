<?php
require  __DIR__ . '/../../includes/header-right.php';
?>


<div class="mx-auto p-3 max-width--custom">

    <div class="container p-3">
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <div class="form--placeholder row">


            <div class="col-6">
                <div class="card mb-4 border-0 shadow">
                    <div class="placeholder-glow ">
                        <div class="card-header bg-custom-1">
                            <div class="placeholder col-6">hola bb</div>
                        </div>
                        <div class="card-body">

                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-7">A</span>
                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-7">A</span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card mb-4 border-0 shadow">
                    <div class="placeholder-glow ">
                        <div class="card-header bg-custom-1">
                            <div class="placeholder col-6">hola bb</div>
                        </div>
                        <div class="card-body">

                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-7">A</span>
                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-7">A</span>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="card mb-4 border-0 shadow">
                    <div class="placeholder-glow ">
                        <div class="card-header bg-custom-1">
                            <div class="placeholder col-6">hola bb</div>
                        </div>
                        <div class="card-body">

                            <span class="placeholder m-3 col-6">A</span>
                            <span class="placeholder m-3 col-2">A</span>
                            <span class="placeholder m-3 col-2">A</span>
                            <span class="placeholder m-3 col-2">A</span>
                            <span class="placeholder m-3 col-2">A</span>
                            <span class="placeholder m-3 col-2">A</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4 border-0 shadow">
                    <div class="placeholder-glow ">
                        <div class="card-header bg-custom-1">
                            <div class="placeholder col-6">hola bb</div>
                        </div>
                        <div class="card-body">

                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-2">A</span>
                            <span class="placeholder m-3 col-3">A</span>
                            <span class="placeholder m-3 col-3">A</span>
                        </div>
                    </div>
                </div>
            </div>

        
        </div>

        <form id="form_matricula" action="">

            <div class="row">
                <div class="col-lg-6 col-md-12 ">
                    <div class="card mb-4 border-0 shadow" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
                        <div class="card-header bg-custom-1">
                            Datos
                        </div>

                        <div class="card-body">

                            <div class="row g-3">

                                <label for="school_nombre" class="col-sm-3 col-form-label">I. Educativa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control " name="school_nombre" id="school_nombre" value="" disabled>
                                </div>



                                <label for="periodo_academico" class="col-sm-3 col-form-label">Periodo Académico</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="periodo_academico" id="periodo_academico">
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>



                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card mb-4 border-0 shadow" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
                        <div class="card-header bg-custom-1">
                            Responsable de Matricula
                        </div>


                        <div class="card-body">

                            <div class="row g-3">

                                <label for="user_nombre_completo" class="col-sm-2 col-form-label">Nombres</label>

                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control" name="user_nombre_completo" id="user_nombre_completo" value="" disabled>
                                </div>


                                <label for="user_cargo" class="col-sm-2 col-form-label">Cargo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user_cargo" name="user_cargo" value="" disabled>
                                </div>




                            </div>



                        </div>
                    </div>

                </div>
            </div>


            <div class="card mb-4 border-0 shadow position-relative z-3" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
                <div class="card-header bg-custom-1">
                    Matricula de Estudiante
                </div>


                <div class="card-body">

                    <div class="row g-3 mb-4 ">

                        <div class="col-md-12 col-lg-6 position-relative">
                            <label for="est_full_name" class="form-label"><i class="bi bi-person-fill"></i> Dni o Nombre del Estudiante</label>
                            <input type="hidden" id="est_id" name="est_id">
                            <div class="input-group">
                                <input type="text" name="est_full_name" id="est_full_name" class="form-control shadow-sm" value="" autocomplete="off" aria-describedby="button--search">
                                <button class="btn btn-outline-secondary" type="button" id="button--search"><i class="bi bi-search" disabled></i></button>
                            </div>
                            <div class="position-absolute w-100 shadow bg-white">
                                <ul id="results-students" class="list-unstyled p-0 m-0 list--search">

                                </ul>
                            </div>
                            <div class="invalid-feedback">
                                Error
                            </div>

                        </div>



                        <div class="col-md-3 col-lg-3">
                            <label for="est_cod_modular" class="form-label">Codigo Modular</label>
                            <input type="text" name="est_cod_modular" id="est_cod_modular" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>




                        <div class="col-md-6 col-lg-2">
                            <label for="mat_nivel" class="form-label">Nivel</label>
                            <select class="form-select shadow-sm" name="mat_nivel" id="mat_nivel">
                                <option disabled selected>Seleccione</option>
                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <label for="mat_grado" class="form-label">Grado</label>
                            <select class="form-select shadow-sm" name="mat_grado" id="mat_grado">
                                <option disabled selected>Seleccione</option>
                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>



                        <div class="col-md-6 col-lg-2">
                            <label for="mat_seccion" class="form-label">Sección</label>
                            <select class="form-select shadow-sm" name="mat_seccion" id="mat_seccion">
                                <option disabled selected>Seleccione</option>
                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>



                        <div class="col-md-6 col-lg-2">
                            <label for="mat_turno" class="form-label">Turno</label>
                            <select class="form-select shadow-sm" name="mat_turno" id="mat_turno">
                                <option disabled selected>Seleccione</option>
                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>



                        <div class="col-md-6 col-lg-2">
                            <label for="mat_situacion" class="form-label">Situacion Matricula</label>
                            <select class="form-select shadow-sm" name="mat_situacion" id="mat_situacion">
                                <option disabled selected>Seleccione</option>

                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>



                    </div>






                </div>
            </div>


            <div class="card mb-4 border-0 shadow" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
                <div class="card-header bg-custom-1">
                    Representante Legal
                </div>


                <div class="card-body">

                    <div class="row g-3 p-3 bg-body-secondary">

                        <div class="col-md-3 col-lg-3">
                            <label for="apod_ape_paterno" class="form-label">Apellido Paterno</label>
                            <input type="text" name="apod_ape_paterno" id="apod_ape_paterno" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3">
                            <label for="apod_ape_materno" class="form-label">Apellido Materno</label>
                            <input type="text" name="apod_ape_materno" id="apod_ape_materno" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-4">
                            <label for="apod_nombres" class="form-label">Nombres</label>
                            <input type="text" name="apod_nombres" id="apod_nombres" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <label for="apod_vinculo" class="form-label">Parentesco con el Estudiante</label>
                            <input type="text" name="apod_vinculo" id="apod_vinculo" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>


                        <div class="col-md-3 col-lg-3">
                            <label for="apod_fech_nac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" name="apod_fech_nac" id="apod_fech_nac" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>


                        <div class="col-md-3 col-lg-3">
                            <label for="apod_g_instruccion" class="form-label">Grado de Instruccion</label>
                            <select class="form-select shadow-sm" name="apod_g_instruccion" id="apod_g_instruccion">
                                <option disabled selected>Seleccione</option>
                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <label for="apod_ocupacion" class="form-label">Ocupación</label>
                            <textarea name="apod_ocupacion" id="apod_ocupacion" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required></textarea>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-12">
                            <label for="apod_domicilio" class="form-label">Domicilio</label>
                            <textarea name="apod_domicilio" id="apod_domicilio" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required></textarea>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <label for="apod_telefono" class="form-label"><i class="bi bi-whatsapp text-success"></i> Telefono <small class="text-body-tertiary">(opcional)</small> </label>
                            <input type="text" name="apod_telefono" id="apod_telefono" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>



                    </div>


                </div>
            </div>




            <div class="col-12 mt-4 text-center">
                <button type="submit" id="btn--generar-matricula" class="btn btn-success shadow-lg"><i class="bi bi-pencil-square"></i> Matricular Estudiante</button>
            </div>
            <!-- //////////////////////////////////////////////////////////////////////////// -->

        </form>
    </div>
</div>