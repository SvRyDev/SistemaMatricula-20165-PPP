<?php
require  __DIR__ . '/../../includes/header-right.php';
?>


<div class="mx-auto p-3 max-width--custom">


    <div class="row">
        <div class="col-lg-6 col-md-12 ">
            <div class="card mb-4 border-0 shadow" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
                <div class="card-header bg-custom-1">
                    Datos
                </div>

                <div class="card-body">

                    <div class="row g-3 p-3 bg-body-secondary">

                        <label for="inputPassword" class="col-sm-2 col-form-label">I. Educativa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="I. E. 20165 NUESTRA SEÑORA DE LOURDES" disabled>
                        </div>


                        <label for="staticEmail" class="col-sm-3 col-form-label">Periodo Académico</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control bg-white" id="staticEmail" value="2024" disabled>
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


                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombres</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="staticEmail" value="WALTER ANDRADE SÁNCHEZ" disabled>
                        </div>


                        <label for="inputPassword" class="col-sm-2 col-form-label">Cargo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="DIRECTOR" disabled>
                        </div>

                        <label for="inputPassword" class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10">
                            <input id="mat_fecha" type="date" class="form-control" id="inputPassword" value="" disabled>
                        </div>


                    </div>



                </div>
            </div>

        </div>
    </div>


    <div class="card mb-4 border-0 shadow" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
        <div class="card-header bg-custom-1">
            Matricula de Estudiante
        </div>


        <div class="card-body">

            <div class="row g-3 mb-4">

                <div class="col-md-5 col-lg-3">
                    <label for="▓▓▓" class="form-label"><i class="bi bi-person-fill"></i> Nombre del Estudiante</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="ANA MARIA VICENTE GUERRA" autocomplete="off" placeholder="" disabled>
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
                    <label for="mat_sit_final" class="form-label">Situacion Final</label>
                    <select class="form-select shadow-sm" name="mat_sit_final" id="mat_sit_final">
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



            <div class="row g-3 mb-4">



                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Apellido Paterno</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>

                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Apellido Materno</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>

                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Nombres</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>
                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Parentesco con el Estudiante</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>
                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Fecha Nacimiento</label>
                    <input type="date" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>


                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Grado de Instruccion</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>

                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Ocupación</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>

                <div class="col-md-3 col-lg-2">
                    <label for="▓▓▓" class="form-label">Domicilio</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>


                <div class="col-md-6 col-lg-2">
                    <label for="▓▓▓" class="form-label">Teléfono</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>



                <div class="col-md-6 col-lg-2">
                    <label for="▓▓▓" class="form-label"><i class="bi bi-whatsapp text-success"></i> Whatsapp <small class="text-body-tertiary">(opcional)</small> </label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>

                <div class="col-md-6 col-lg-2">
                    <label for="▓▓▓" class="form-label"><i class="bi bi-envelope text-primary"></i> Correo Electrónico <small class="text-body-tertiary">(opcional)</small></label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>




            </div>






        </div>
    </div>




    <div class="col-12 mt-4 text-center">
        <button class="btn btn-success shadow-lg"><i class="bi bi-pencil-square"></i> Matricular Estudiante</button>
    </div>

</div>