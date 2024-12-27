<?php
require  __DIR__ . '/../../includes/header-right.php';
?>



<div class="mx-auto p-3 max-width--custom">






    <div class="form--template ">
        <form action="" id="form_roles" class="needs-validation" method="POST" novalidate>

            <div class=" card mb-4 border-0 shadow">
                <div class="card-header bg-custom-1">
                    Ingrese sus Datos
                </div>

                <div class="card-body">

                    <div class="row g-3 mb-3 p-3 bg-body-secondary">
                        <input type="hidden" id="id_rol" name="id_rol" value="<?= isset($data['id_role']) ? $data['id_role'] : '' ?>">
                        <div class="col-lg-4 col-md-5">
                            <label class="required form-label" for="role_abreviatura">Abreviatura</label>
                            <input type="text" name="role_abreviatura" id="role_abreviatura"
                                class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                data-letters data-uppercase data-required required>
                            <div class="invalid-feedback position-absolute">
                                Error
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5">
                            <label class="required form-label" for="role_cargo">Cargo</label>
                            <input type="text" name="role_cargo" id="role_cargo"
                                class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                data-letters data-uppercase data-required required>
                            <div class="invalid-feedback position-absolute">
                                Error
                            </div>
                        </div>



                    </div>
                    <button type="submit" id="btn--submit--form" class="btn btn-success shadow-lg"><i class="bi bi-pencil-square"></i> Registrar Cargo</button>

                </div>
            </div>
        </form>
    </div>







</div>