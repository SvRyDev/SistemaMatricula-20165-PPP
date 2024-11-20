<h2 data-aos="fade-right"><?= $data['title'] ?></h2>
<p data-aos="fade-right"> <?= $data['sub_title'] ?></p>




<div class="card mb-4 border-0 shadow">
    <div class="card-header bg-custom-1">
        Datos de Estudiante
    </div>


    <div class="card-body">

        <fieldset class="border p-3">
            <h6 class="w-auto px-1 text-primary">Información Personal</h6>


            <div class="row g-3">


                <div class="col-md-6 col-lg-4">
                    <label for="▓▓▓" class="form-label">Nombre(s)</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control" value="" autocomplete=0 placeholder="Ej: Ana Lucia" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <label for="▓▓▓" class="form-label">Apellido Paterno</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control" value="" autocomplete=0 placeholder="Ej: Pérez" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <label for="▓▓▓" class="form-label">Apellido Materno</label>
                    <input type="text" name="▓▓▓" id="▓▓▓" class="form-control"value="" autocomplete=0 placeholder="Ej: García" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <label for="▓▓▓" class="form-label">Sexo</label>
                    <select class="form-select" name="▓▓▓" id="▓▓▓" >
                        <option disabled selected>Seleccione una opción</option>
                        <option value="1">Hombre (H)</option>
                        <option value="2">Mujer (M)</option>
                    </select>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <label for="▓▓▓" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="▓▓▓" id="▓▓▓" class="form-control"value="" autocomplete=0 placeholder="Ej: García" required>
                    <div class="invalid-feedback">
                        Error
                    </div>
                </div>





                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">State</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>


            </div>





        </fieldset>

    </div>
</div>

<div class="card border-0 shadow">
    <div class="card-header bg-transparent bg-custom-1">
        <i class="bi bi-card-list"></i> Estado de Salud de Estudiante

    </div>
    <div class="card-body">



        <form action="<?= base_url() ?>/administration" id="formInstitucion" class="g-3 needs-validation" method="POST" novalidate>


            <div class="row">

                <div class="mt-2 col-md-6">
                    <label for="validationCustom01" class="form-label">Nombre(s):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback ">
                        Looks good!
                    </div>
                </div>

                <div class="mt-2 col-md-6">
                    <label for="validationCustom01" class="form-label">Nombre (s):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback ">
                        Looks good!
                    </div>
                </div>
                <div class="mt-2 col-md-6">
                    <label for="validationCustom01" class="form-label">Nombre (s):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback ">
                        Looks good!
                    </div>
                </div>
                <div class="mt-2 col-md-6">
                    <label for="validationCustom01" class="form-label">Nombre (s):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback ">
                        Looks good!
                    </div>
                </div>


                <div class="mt-2 col-md-6">
                    <label for="validationCustom02" class="form-label">Apellidos</label>
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



        </form>

    </div>
</div>


<div class="col-12 mt-4 text-end">
    <button class="btn btn-primary"><i class="bi bi-pencil-square"></i> Registrar Estudiante</button>
</div>