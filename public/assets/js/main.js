// Script para cargar vistas de manera dinámica sin recargar la página


let isTransitioning = false;
// Función para cargar una vista
function loadView(view) {

    if (isTransitioning) return;

    isTransitioning = true;

    // Aplicar la animación de salida antes de vaciar el contenido

    // Esperar a que termine la animación de salida
    $('#main-content-space').fadeOut(100, function () {
        $('#main-content-space').off().empty();

        // Realizamos la solicitud AJAX
        $.ajax({
            url: base_url + '/' + view, // La URL con la ruta de la vista
            type: 'GET', // Tipo de solicitud
            dataType: 'html', // Esperamos una respuesta en formato HTML
            beforeSend: function () {
                $('#main-content-space').html('Cargando...'); // Mostrar un mensaje mientras se carga
            },
            success: function (response) {
                $('#main-content-space')
                    .html(response).fadeIn(200);


                // Volver a inicializar AOS para que detecte los nuevos elementos
                AOS.refresh();




                window.history.pushState({
                    view: view
                }, view, base_url + '/' + view); // Actualizar la URL sin recargar


                // Asegurarse de que el script se carga después de la vista
                setTimeout(function () {
                    loadViewScript(view);
                }, 50);


            },
            error: function () {
                $('#main-content-space').html('Error al cargar la vista.'); // Manejar errores
            },
            complete: function () {
                isTransitioning = false; // Desbloquear cuando la transición haya terminado
            }
        });

    });


}



// Función para cargar y ejecutar el script específico de cada vista
function loadViewScript(view) {
    // Eliminar el script anterior si existe
    console.log('Eliminando script previo');
    $('#dynamic-script').remove();
    console.log('eliminando script, su rango es ' + $('#dynamic-script').length);

    const moduleName = view.split('/')[0];

    const scriptUrl = base_url + '/public/assets/js/modules/' + moduleName + '.js?v=' + new Date().getTime();
    console.log("Intentando cargar el script: " + scriptUrl);

    // Agregar el nuevo script con un id único
    const scriptElement = document.createElement('script');
    scriptElement.src = scriptUrl;
    scriptElement.id = 'dynamic-script';
    document.body.appendChild(scriptElement);


    scriptElement.onload = function () {
        console.log('Script para la vista ' + view + ' cargado correctamente. Modulo ' + moduleName + ' cargado :D');
    };
    scriptElement.onerror = function () {
        console.error('Error al cargar el script: ' + scriptUrl);
    };

    console.log('el script ahora tiene ' + $('#dynamic-script').length);
}






// Función para obtener la vista actual desde la URL
function getCurrentView() {
    const path = window.location.pathname;
    const segments = path.split('/');
    console.log('la ruta completa es ' + segments + ' y el emento parcial es ' + segments[segments.length - 1]);
    
    return module_url;
}

// Función para resaltar el botón correspondiente en el menú
function highlightMenu(view) {
    $('nav a').removeClass('active text-color-custom-1 bg-white').addClass('text-white');
    $(`nav a[href$="${view}"]`).addClass('active text-color-custom-1 bg-white').removeClass('text-white');
}

// Cargar vista inicial al cargar la página
$(document).ready(function () {
    const currentView = getCurrentView();
    highlightMenu(currentView);
});







// Manejar los clics en los enlaces del menú para cargar vistas dinámicamente
$('nav a').on('click', function (e) {
    e.preventDefault(); // Evitar el comportamiento por defecto del enlace
    var view = $(this).attr('href').substring(1); // Obtener la parte de la URL después de '#'


    // Remover clase activa de todos los enlaces
    $('nav a').removeClass('active text-color-custom-1 bg-white').addClass('text-white');

    // Agregar clase activa al enlace seleccionado
    $(this).addClass('active text-color-custom-1 bg-white').removeClass('text-white');



    loadView(view); // Cargar la vista seleccionada
    console.log('haciendo clic en el boton interno :D');

});




// Manejar el retroceso o avance en el navegador (historial)
$(window).on('popstate', function (event) {
    if (event.originalEvent.state && event.originalEvent.state.view) {
        loadView(event.originalEvent.state.view); // Cargar la vista que estaba en el historial

 }
});


loadView(module_url);


