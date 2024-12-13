<?php
require  __DIR__ . '/../../includes/header-right.php';
?>

<div class="mx-auto p-3 max-width--custom">
    <div class="contanier p-3" data-aos="fade-right" data-aos-delay="50">
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <div class="row">
            <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" href="#students/new" class="btn--action btn btn-success">
                            Nuevo Estudiante
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <h5>Lista de Estudiantes</h5>
                        <table id="tabla_estudiantes" class="display table table-sm"></table>

                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
</div>