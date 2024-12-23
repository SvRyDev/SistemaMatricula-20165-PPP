    <!-- Imports js-->

    <!-- BIBLIOTECAS JS DE TERCEROS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>

    <!-- Select2 Js (Js)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- DataTable Js (Js)-->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>

    <!-- SwwtAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/js/mdb.umd.min.js"></script>



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