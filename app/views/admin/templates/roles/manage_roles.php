<?php
require  __DIR__ . '/../../includes/header-right.php';
?>



<div class="mx-auto p-3 max-width--custom">
    <div class="contanier p-3" data-aos="fade-right" data-aos-delay="50">


        <div class="row g-3">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">


                    <h5>Lista de Cargos</h5>
                        <button type="button" href="#roles/new" class="btn--action btn btn-success">
                        <i class="bi bi-plus-circle"></i> Nuevo Cargo
                        </button>
                        <table id="tabla_roles" class="display table table-sm"></table>
                    


                    </div>

                </div>

            </div>

            <form action="" id="form_roles" class="needs-validation" method="POST" novalidate>





            </form>



        </div>





    </div>
</div>