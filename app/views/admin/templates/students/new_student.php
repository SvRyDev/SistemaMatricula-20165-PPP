<?php
require  __DIR__ . '/../../includes/header-right.php';
?>


<div class="mx-auto p-3 max-width--custom">

    <form id="form_students">

        <div class="form--placeholder">
            <div class=" card mb-4 border-0 shadow">
                <div class="placeholder-glow g-3">
                    <div class="card-header bg-custom-1">
                        <div class="placeholder col-6">hola bb</div>
                    </div>
                    <div class="card-body">

                        <div class="placeholder m-3 col-3">A</div>
                        <span class="placeholder m-3 col-4">A</span>
                        <span class="placeholder m-3 col-3">A</span>
                        <span class="placeholder m-3 col-4">A</span>
                        <span class="placeholder m-3 col-4">A</span>
                        <span class="placeholder m-3 col-4">A</span>

                    </div>
                </div>
            </div>

            <div class="card mb-4 border-0 shadow">
                <div class="placeholder-glow g-3">
                    <div class="card-header bg-custom-1">
                        <div class="placeholder col-6">hola bb</div>
                    </div>
                    <div class="card-body">

                        <div class="placeholder m-3 col-3">A</div>
                        <span class="placeholder m-3 col-4">A</span>
                        <span class="placeholder m-3 col-3">A</span>
                        <span class="placeholder m-3 col-4">A</span>
                        <span class="placeholder m-3 col-4">A</span>
                        <span class="placeholder m-3 col-4">A</span>

                    </div>
                </div>
            </div>

        </div>

        <div class="form--template">
            <div class=" card mb-4 border-0 shadow">
                <div class="card-header bg-custom-1">
                    Datos de Estudiante
                </div>

                <div class="card-body">

                    <h6 class="w-auto px-1 text-primary">Información Personal</h6>
                    <hr class="m-0 mb-4 text-primary">


                    <div class="row g-3 mb-4 p-3 bg-body-secondary">

                        <div class="col-lg-2 col-md-3">

                            <div class="form-floating h-auto ">
                                <input type="text" name="est_num_documento" id="est_num_documento"
                                    class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                    data-required data-numeric data-maxlength=8 data-exactlength=8 required>
                                <div class="invalid-feedback position-relative">
                                    Error
                                </div>
                                <label class="required" for="est_num_documento">DNI</label>
                            </div>
                            
                        </div>

                        <div class="col-lg-3 col-md-4 ">
                            <div class="form-floating h-auto">
                                <input type="text" name="est_ape_paterno" id="est_ape_paterno"
                                    class="form-control shadow-sm" value="" autocomplete="off"
                                    placeholder="Apellido Paterno" data-letters data-uppercase data-required required>
                                <div class="invalid-feedback position-relative">Error</div>
                                <label for="est_ape_paterno">Apellido Paterno</label>
                            </div>
                        </div>

                        <div class=" col-lg-3 col-md-4 ">
                            <div class="form-floating h-auto">
                                <input type="text" name="est_ape_materno" id="est_ape_materno"
                                    class="form-control shadow-sm" value="" autocomplete="off"
                                    placeholder="Apellido Materno" data-letters data-uppercase data-required required>
                                <div class="invalid-feedback position-relative">Error</div>
                                <label for="est_ape_materno">Apellido Materno</label>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 ">
                            <div class="form-floating h-auto shadow-sm">
                                <input type="text" name="est_nombres" id="est_nombres"
                                    class="form-control shadow-sm" value="" autocomplete="off"
                                    placeholder="Nombres" data-letters data-uppercase data-required required>
                                <div class="invalid-feedback position-relative">Error</div>
                                <label for="est_nombres">Nombres</label>
                            </div>
                        </div>


                        <div class="col-lg-2 col-md-3">
                            <div class="form-floating form-floating-sm ">
                                <select class="form-select shadow-sm" name="est_sexo" id="est_sexo"></select>
                                <div class="invalid-feedback">
                                    Error
                                </div>
                                <label for="est_sexo" class="form-label">Sexo</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <div class="form-floating form-floating-sm ">
                                <select class="form-select shadow-sm" name="est_estado_civil" id="est_estado_civil"></select>
                                <div class="invalid-feedback">
                                    Error
                                </div>
                                <label for="est_estado_civil" class="form-label">Estado civil</label>
                            </div>
                        </div>


                    </div>

                    <h6 class="w-auto px-1 text-primary">Lugar y Fecha de Nacimiento</h6>
                    <hr class="m-0 mb-4 text-primary">

                    <div class="row g-3 p-3 bg-body-secondary">

                        <div class="col-md-6 col-lg-3">
                            <div class="form-floating form-floating-sm ">
                                <input type="date" name="est_fecha_nac" id="est_fecha_nac" class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                    required>
                                <div class="invalid-feedback">
                                    Error
                                </div>
                                <label for="est_fecha_nac" class="form-label">Fecha de Nacimiento</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="est_pais_nac" class="required">Pais</label>
                            <select class="form-select shadow-sm" name="est_pais_nac" id="est_pais_nac"></select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-3">
                            <label for="est_dep_nac" class="required">Departamento</label>
                            <input type="text" name="est_dep_nac" id="est_dep_nac" class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                data-letters data-uppercase data-required required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-3">
                            <label for="est_prov_nac" class="required form-label">Provincia</label>
                            <input type="text" name="est_prov_nac" id="est_prov_nac" class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                data-letters data-uppercase data-required required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="est_dist_nac" class="">Distrito</label>
                            <input type="text" name="est_dist_nac" id="est_dist_nac" class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                data-letters data-uppercase data-required required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="est_lengua_materna" class="">Lengua Materna</label>
                            <select class="form-select shadow-sm" name="est_lengua_materna" id="est_lengua_materna">

                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="est_segunda_lengua" class="form-label">Segunda Materna</label>
                            <select class="form-select shadow-sm" name="est_segunda_lengua" id="est_segunda_lengua">

                            </select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="est_religion" class="form-label">Religion</label>
                            <input type="text" name="est_religion" id="est_religion" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>



                        <div class="col-md-6 col-lg-4">
                            <label for="est_tipo_discapacidad" class="form-label">Tipo de Discapacidad</label>
                            <select class="form-select shadow-sm" name="est_tipo_discapacidad" id="est_tipo_discapacidad"></select>
                            <div class="invalid-feedback">
                                Seleccione una opción
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <label for="est_num_hermanos" class="form-label">Numero de Hermanos</label>
                            <input type="text" name="est_num_hermanos" id="est_num_hermanos" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" data-numeric data-maxlength=2 required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <label for="est_tiene_cert_medico" class="form-label">Certificado Médico</label>
                            <select class="form-select shadow-sm" name="est_tiene_cert_medico" id="est_tiene_cert_medico">
                                <option disabled selected>Seleccione</option>
                                <option value="1">Tiene</option>
                                <option value="0">No tiene</option>

                            </select>
                            <div class="invalid-feedback">
                                Seleccione una opción
                            </div>
                        </div>


                    </div>

                </div>


            </div>

            <div class="card mb-4 border-0 shadow" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
                <div class="card-header bg-custom-1">
                    Datos de Domicilio del Estudiante
                </div>


                <div class="card-body">

                    <h6 class="w-auto px-1 text-primary">Domicilio</h6>
                    <hr class="m-0 mb-4 text-primary">

                    <div class="row g-3 mb-4 p-3 bg-body-secondary">


                        <div class="col-md-6 col-lg-12">
                            <label for="est_direccion_ubi" class="form-label">Dirección</label>
                            <input type="text" name="est_direccion_ubi" id="est_direccion_ubi" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <label for="est_lugar_ubi" class="form-label">Lugar</label>
                            <input type="text" name="est_lugar_ubi" id="est_lugar_ubi" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <label for="est_distrito_ubi" class="form-label">Distrito</label>
                            <input type="text" name="est_distrito_ubi" id="est_distrito_ubi" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <label for="est_prov_uvi" class="form-label">Provincia</label>
                            <input type="text" name="est_prov_uvi" id="est_prov_uvi" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <label for="est_dep_ubi" class="form-label">Departamento</label>
                            <input type="text" name="est_dep_ubi" id="est_dep_ubi" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="est_telef_ubi" class="form-label">Telefono</label>
                            <input type="text" name="est_telef_ubi" id="est_telef_ubi" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                    </div>

                </div>
            </div>



            <div class="card mb-4 border-0 shadow" data-aos="fade-right" data-aos-delay="100" data-aos-offset="-3000">
                <div class="card-header bg-custom-1">
                    Estado de Salud del Estudiante
                </div>


                <div class="card-body">


                    <div class="row g-3 mb-4 p-3 bg-body-secondary">

                        <div class="col-md-6 col-lg-12">
                            <label for="est_alergias" class="form-label">Alergias</label>
                            <textarea name="est_alergias" id="est_alergias" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required> </textarea>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="est_exp_traum" class="form-label">Experiencias Traumáticas</label>
                            <textarea name="est_exp_traum" id="est_exp_traum" class="form-control shadow-sm" value="" autocomplete="off" placeholder="" required> </textarea>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <label for="est_tipo_sangre" class="form-label">Tipo de Sangre</label>
                            <select class="form-select shadow-sm" name="est_tipo_sangre" id="est_tipo_sangre"></select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>


                    </div>

                    <h6 class="w-auto px-1 text-primary">Enfermedades Sufridas</h6>
                    <hr class="m-0 mb-4 text-primary">


                    <div class="row g-3 mb-4 p-3 bg-body-secondary">


                        <table id="est--tabla_enfermedades" class="table ">
                            <thead>
                                <tr>
                                    <th class="bg-body-secondary " scope="col">#</th>
                                    <th class="bg-body-secondary w-25" scope="col">Edad Aprox</th>
                                    <th class="bg-body-secondary w-75" scope="col">Enfermedad</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-body-secondary">
                                    <th class="bg-body-secondary" scope="row">1</th>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_edad_enf_1" id="est_edad_enf_1" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_nom_enf_1" id="est_nom_enf_1" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>


                                </tr>
                                <tr>
                                    <th class="bg-body-secondary" scope="row">2</th>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_edad_enf_2" id="est_edad_enf_2" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_nom_enf_2" id="est_nom_enf_2" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>


                                </tr>
                                <tr>
                                    <th class="bg-body-secondary" scope="row">3</th>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_edad_enf_3" id="est_edad_enf_3" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_nom_enf_3" id="est_nom_enf_3" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>


                                </tr>
                            </tbody>
                        </table>




                    </div>

                    <h6 class="w-auto px-1 text-primary">Vacunas</h6>
                    <hr class="m-0 mb-4 text-primary">


                    <div class="row g-3 mb-4 p-3 bg-body-secondary">


                        <table id="est--tabla_vacunas" class="table">
                            <thead>
                                <tr>
                                    <th class="bg-body-secondary " scope="col">#</th>
                                    <th class="bg-body-secondary w-25" scope="col">Edad Aprox</th>
                                    <th class="bg-body-secondary w-75" scope="col">Vacuna</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="bg-body-secondary" scope="row">1</th>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_edad_vacuna_1" id="est_edad_vacuna_1" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_nom_vacuna_1" id="est_nom_vacuna_1" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>


                                </tr>
                                <tr>
                                    <th class="bg-body-secondary" scope="row">2</th>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_edad_vacuna_2" id="est_edad_vacuna_2" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_nom_vacuna_2" id="est_nom_vacuna_2" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>


                                </tr>
                                <tr>
                                    <th class="bg-body-secondary" scope="row">3</th>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_edad_vacuna_3" id="est_edad_vacuna_3" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>
                                    <td class="bg-body-secondary">
                                        <input type="text" name="est_nom_vacuna_3" id="est_nom_vacuna_3" class="form-control shadow-sm" value="" autocomplete="off" placeholder="">
                                    </td>


                                </tr>
                            </tbody>
                        </table>




                    </div>

                </div>
            </div>



            <div class="card border-0 shadow" data-aos="fade-right" data-aos-delay="200" data-aos-offset="-3000">
                <div class="card-header bg-transparent bg-custom-1">
                    Datos de los Padres

                </div>
                <div class="card-body">




                    <h6 class="w-auto px-1 text-primary"> Datos del Padre</h6>
                    <hr class="m-0 mb-4 text-primary">

                    <div class="row g-3 mb-4 p-3 bg-body-secondary">


                        <div class="col-md-6 col-lg-3">
                            <label for="pad_ape_paterno" class="form-label">Apellido Paterno</label>
                            <input type="text" name="pad_ape_paterno" id="pad_ape_paterno" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="pad_ape_materno" class="form-label">Apellido Materno</label>
                            <input type="text" name="pad_ape_materno" id="pad_ape_materno" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <label for="pad_nombres" class="form-label">Nombres</label>
                            <input type="text" name="pad_nombres" id="pad_nombres" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="pad_fecha_nac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" name="pad_fecha_nac" id="pad_fecha_nac" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <label for="pad_vive" class="form-label">Vive</label>
                            <select class="form-select" name="pad_vive" id="pad_vive">
                                <option disabled selected>Seleccione</option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="pad_grado_instruc" class="form-label">Grado de Instrucción</label>
                            <select name="pad_grado_instruc" id="pad_grado_instruc" class="form-select" required></select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <label for="pad_ocupacion" class="form-label">Ocupación</label>
                            <input type="text" name="pad_ocupacion" id="pad_ocupacion" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <label for="pad_vive_est" class="form-label">Vive con el estudiante?</label>
                            <select class="form-select" name="pad_vive_est" id="pad_vive_est">
                                <option disabled selected>Seleccione</option>
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="pad_religion" class="form-label">Religión</label>
                            <input type="text" name="pad_religion" id="pad_religion" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>


                    </div>


                    <h6 class="w-auto px-1 text-primary"> Datos de la Madre</h6>
                    <hr class="m-0 mb-4 text-primary">

                    <div class="row g-3 mb-4 p-3 bg-body-secondary">

                        <div class="col-md-6 col-lg-3">
                            <label for="mad_ape_paterno" class="form-label">Apellido Paterno</label>
                            <input type="text" name="mad_ape_paterno" id="mad_ape_paterno" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="mad_ape_materno" class="form-label">Apellido Materno</label>
                            <input type="text" name="mad_ape_materno" id="mad_ape_materno" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <label for="mad_nombres" class="form-label">Nombres</label>
                            <input type="text" name="mad_nombres" id="mad_nombres" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="mad_fecha_nac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" name="mad_fecha_nac" id="mad_fecha_nac" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <label for="mad_vive" class="form-label">Vive</label>
                            <select class="form-select" name="mad_vive" id="mad_vive">
                                <option disabled selected>Seleccione</option>
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="mad_grado_instruc" class="form-label">Grado de Instrucción</label>
                            <select name="mad_grado_instruc" id="mad_grado_instruc" class="form-select" required></select>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <label for="mad_ocupacion" class="form-label">Ocupación</label>
                            <input type="text" name="mad_ocupacion" id="mad_ocupacion" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-2">
                            <label for="mad_vive_est" class="form-label">Vive con el estudiante?</label>
                            <select class="form-select" name="mad_vive_est" id="mad_vive_est">
                                <option disabled selected>Seleccione</option>
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label for="mad_religion" class="form-label">Religión</label>
                            <input type="text" name="mad_religion" id="mad_religion" class="form-control" value="" autocomplete="off" placeholder="" required>
                            <div class="invalid-feedback">
                                Error
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 mt-4 text-center">
                <button type="submit" class="btn btn-success shadow-lg"><i class="bi bi-pencil-square"></i> Registrar Estudiante</button>
            </div>
        </div>
    </form>
</div>