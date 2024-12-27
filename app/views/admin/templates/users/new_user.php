<?php
require  __DIR__ . '/../../includes/header-right.php';
?>



<div class="mx-auto p-3 max-width--custom">

    <form id="form_users">

        <div class="form--placeholder">
            <div class=" card mb-4 border-0 shadow">
                <div class="placeholder-glow g-3">
                    <div class="card-header bg-custom-1">
                        <div class="placeholder col-6">hola bb</div>
                    </div>
                    <div class="card-body">
                        <div class="placeholder col-4">hola bb</div>
                        <hr>
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


        <div class="form--template ">
            <form action="" id="form_users" class="needs-validation" method="POST" novalidate>
                <input type="hidden" id="id_user" name="id_user" value="<?= isset($data['id_user']) ? $data['id_user'] : '' ?>">

                <div class=" card mb-4 border-0 shadow">
                    <div class="card-header bg-custom-1">
                        Ingrese sus Datos
                    </div>

                    <div class="card-body">

                        <h6 class="w-auto px-1 text-primary">Informacion de Usuario</h6>
                        <hr class="m-0 mb-4 text-primary">


                        <div class="row g-3 mb-4 p-3 bg-body-secondary">

                            <div class="col-lg-4 col-md-5">
                                <label class="required form-label" for="user_nombre_completo">Nombre Completo</label>
                                <input type="text" name="user_nombre_completo" id="user_nombre_completo"
                                    class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                    data-letters data-uppercase data-required required>
                                <div class="invalid-feedback position-relative">
                                    Error
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <label class="required form-label" for="user_nombre_usuario">Usuario</label>
                                <input type="text" name="user_nombre_usuario" id="user_nombre_usuario"
                                    class="form-control shadow-sm" value="" autocomplete="off" placeholder=""
                                    data-letters data-uppercase data-required required>
                                <div class="invalid-feedback position-relative">
                                    Error
                                </div>
                            </div>



                            <div class=" col-lg-4 col-md-5 ">
                                <label for="user_clave" class="required form-label">Clave</label>
                                <input type="password" name="user_clave" id="user_clave"
                                    class="form-control shadow-sm" value="" autocomplete="off"
                                    placeholder="" required>
                                <div class="invalid-feedback position-relative">
                                    Error
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 ">
                                <label for="user_rol" class="required form-label">Cargo</label>
                                <select class="form-select shadow-sm" name="user_rol" id="user_rol">

                                </select>
                                <div class="invalid-feedback position-relative">
                                    Error
                                </div>
                            </div>


                        </div>
                        <button type="submit" id="btn--submit--form" class="btn btn-success shadow-lg"><i class="bi bi-pencil-square"></i> Registrar Usuario</button>

                    </div>
                </div>
            </form>
        </div>






    </form>
</div>