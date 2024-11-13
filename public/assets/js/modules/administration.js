// Función para ejecutar scripts específicos de la vista cargada
function executeViewSpecificScripts() {
    // Código para la vista "dashboard"

    (function () {



        // Inicializar Grid.js
        new gridjs.Grid({
            columns: ["Nombre", "Correo Electrónico", "Phone Number"],
            sort: true,
            search: true,
            pagination: {
                enabled: true,
                limit: 4,
            },
            language: {
                search: {
                    placeholder: "Buscar...",
                },
                sort: {
                    sortAsc: "Ordenar de forma ascendente",
                    sortDesc: "Ordenar de forma descendente",
                },
                pagination: {
                    previous: "Anterior",
                    next: "Siguiente",
                    showing: "Mostrando",
                    results: () => "registros",
                    to: "a",
                    of: "de",
                },
                loading: "Cargando...",
                noRecordsFound: "No se encontraron registros",
                error: "Ha ocurrido un error al cargar los datos",
            },
            style: {
                container: {
                    "font-size": "14px",
                },
            },
            data: [
                ["Johnajaja", "john@example.com", "(353) 01 222 3333"],
                ["Markos", "mark@gmail.com", "(01) 22 888 4444"],
                ["Eoin", "eoin@gmail.com", "0097 22 654 00033"],
                ["Sarah", "sarahcdd@gmail.com", "+322 876 1233"],
                ["Afshin", "afshin@mail.com", "(353) 22 87 8356"],
            ],
        }).render(document.getElementById("tablegrid"));
    })();
}
executeViewSpecificScripts();



function init() {


    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

    // Función para habilitar/deshabilitar el formulario según el checkbox
    function toggleFormState() {
        const form = document.getElementById('formInstitucion');
        const inputs = form.querySelectorAll('input, select');
        const checkbox = document.getElementById('enableFormCheckbox');

        // Si el checkbox está marcado, habilita los campos
        if (checkbox.checked) {
            inputs.forEach(input => {
                input.disabled = false;
            });
        } else {
            // Si el checkbox no está marcado, deshabilita los campos
            inputs.forEach(input => {
                input.disabled = true;
                $('#submitButton').prop('disabled', true)
            });
        }
    }

    // Función para habilitar el botón de submit si hay cambios
    function enableSubmitIfChanged() {
        const form = document.getElementById('formInstitucion');
        const submitButton = document.getElementById('submitButton');
        const inputs = form.querySelectorAll('input, select');

        // Comprobar si algún campo tiene cambios
        let isChanged = false;

        inputs.forEach(input => {
            if (input.value !== input.defaultValue) {
                isChanged = true;
            }
        });

        // Si algún campo se ha cambiado, habilita el botón submit
        if (isChanged) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    }

    // Evento para detectar cambios en los campos
    document.querySelectorAll('#formInstitucion input, #formInstitucion select').forEach(input => {
        input.addEventListener('input', enableSubmitIfChanged);
    });

    // Ejecuta la función cada vez que se cambie el estado del checkbox
    document.getElementById('enableFormCheckbox').addEventListener('change', toggleFormState);

    // Ejecutar la función para que el formulario esté deshabilitado al inicio

    toggleFormState();




    $('#formInstitucion').on('submit', function (event) {
        event.preventDefault();

        var form = $(this);
        var url = form.attr('action') + "/saveConfig";
        console.log('el url de la peticion es : ' + url);

        $.ajax({
            url: url,
            method: "POST",
            data: form.serialize(),
            success: function (response) {
                if (response.status === "success") {
                    console.log(response.status);
                } else {
                    console.log("error al actualizar datos D:" + response.status);

                }

                
                toastr.success('Se ha modificado los cambios :D.', 'Cambios Guardados!!', {
                    timeOut: 2000, positionClass: "toast-bottom-right"

                })

                form.find('input, select, textarea, button').prop('disabled', true);
                $('#enableFormCheckbox').prop('checked', false);
                


            },
            error: function (xhr, status, error) {
                console.error("Error al actualizar los datos de : ", error);
            }
        })

    });
}

init();



console.log('hola como estas');
