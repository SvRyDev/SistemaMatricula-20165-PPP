    <!-- Imports js-->

    <!-- BIBLIOTECAS JS DE TERCEROS-->
    <script src="<?= assets() ?>/libs/jquery-3.6.0/jquery-3.6.0.min.js"></script>

    <script src="<?= assets() ?>/libs/core-2.11.8/popper.min.js"></script>
    <script src="<?= assets() ?>/libs/bootstrap-v5.3.3/bootstrap.min.js"></script>
 
    <script src="<?= assets() ?>/libs/charts-Js/chart.js"></script>


    <script src="<?= assets() ?>/libs/aos2.3.1/aos.js"></script>


    <script src="<?= assets() ?>/libs/toastr-2.1.4/toastr.min.js"></script>


    
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>

    <!-- DataTable Js (Js)-->
    <script src="<?= assets() ?>/libs/data-table-js/dataTables.min.js"></script>

    <!-- SwwtAlert2 -->
    <script src="<?= assets() ?>/libs/sweet-alert-2/sweetalert2.all.min.js"></script>


    <!-- MDB -->
    <script type="text/javascript" src="<?= assets() ?>/libs/mdb-5/js/mdb.umd.min.js"></script>




    <!-- SCRIPTS DE TERCEROS -->



    <script>
        AOS.init({
                offset: 0, // No dependemos de la posición de desplazamiento
                startEvent: 'load',
                once: true, // Asegura que la animación ocurra solo una vez
            }

        );
    </script>
    <script>
        const base_url = '<?= base_url() ?>';

        let module_name = '<?= $data['module'] ?>';
    </script>

    <script src="<?= assets() ?>/js/main.js"></script>
    <script src="<?= assets() ?>/js/validations.js"></script>