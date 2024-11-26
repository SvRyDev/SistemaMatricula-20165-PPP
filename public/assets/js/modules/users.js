(function () {

    // Manejar los clics en los enlaces del menú para cargar vistas dinámicamente
    $('.btn--action').on('click', function (e) {
      e.preventDefault(); // Evitar el comportamiento por defecto del enlace
      var view = $(this).attr('href').substring(1); // Obtener la parte de la URL después de '#'
      loadView(view); // Cargar la vista seleccionada
      console.log('haciendo clic en el boton interno :D');
  
    });
  



  })();
  