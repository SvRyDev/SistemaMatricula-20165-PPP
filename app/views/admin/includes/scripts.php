    <!-- Imports js-->

    <!-- Bibliotecas JS de terceros-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>



    <script>
        // Script para cargar vistas de manera dinámica sin recargar la página
        $(document).ready(function() {
            // Función para cargar una vista
            function loadView(view) {

                $('#main-content-space').off().empty();

                // Realizamos la solicitud AJAX
                $.ajax({
                    url: '<?= base_url(); ?>/' + view, // La URL con la ruta de la vista
                    type: 'GET', // Tipo de solicitud
                    dataType: 'html', // Esperamos una respuesta en formato HTML
                    beforeSend: function() {
                        $('#main-content-space').html('Cargando...'); // Mostrar un mensaje mientras se carga
                    },
                    success: function(response) {
                        $('#main-content-space').html(response); // Cargar la respuesta en el contenedor
                        window.history.pushState({
                            view: view
                        }, view, '<?= base_url() ?>/' + view); // Actualizar la URL sin recargar


                        loadViewScript(view);
                    },
                    error: function() {
                        $('#main-content-space').html('Error al cargar la vista.'); // Manejar errores
                    }
                });
            }


            // Función para cargar y ejecutar el script específico de cada vista
            function loadViewScript(view) {
                // Eliminar el script anterior si existe
                $('#dynamic-script').remove();
                console.log('eliminando script, su rango es ' +  $('#dynamic-script').length);
                

                const scriptUrl = '<?= assets(); ?>/js/modules/' + view + '.js';
                console.log("Intentando cargar el script: " + scriptUrl);

                // Agregar el nuevo script con un id único
                const scriptElement = document.createElement('script');
                scriptElement.src = scriptUrl;
                scriptElement.id = 'dynamic-script';
                document.body.appendChild(scriptElement);


                scriptElement.onload = function() {
                    console.log('Script para la vista ' + view + ' cargado correctamente.');
                };
                scriptElement.onerror = function() {
                    console.error('Error al cargar el script: ' + scriptUrl);
                };

                console.log('el script ahora tiene ' +  $('#dynamic-script').length);
            }



            // Manejar los clics en los enlaces del menú para cargar vistas dinámicamente
            $('nav a').on('click', function(e) {
                e.preventDefault(); // Evitar el comportamiento por defecto del enlace
                var view = $(this).attr('href').substring(1); // Obtener la parte de la URL después de '#'
                loadView(view); // Cargar la vista seleccionada

            });

            // Manejar el retroceso o avance en el navegador (historial)
            $(window).on('popstate', function(event) {
                if (event.originalEvent.state && event.originalEvent.state.view) {
                    loadView(event.originalEvent.state.view); // Cargar la vista que estaba en el historial
                }
            });


            loadView('<?= $data['module'] ?>')

        });
    </script>