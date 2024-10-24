$(document).ready(function() {
    $('#registerForm').on('submit', function(event) {
        event.preventDefault(); // Prevenir el comportamiento por defecto del formulario

        // Validar contraseñas
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();

        if (password !== confirmPassword) {
            $('#message').text('Las contraseñas no coinciden.').css('color', 'red').show();
            return;
        }

        // Enviar el formulario via AJAX
        $.ajax({
            url: registerUrl+'includes/register.php', 
            type: 'POST',
            data: $(this).serialize(), 
            success: function(response) {
                $('#message').text('Registro exitoso.').css('color', 'green').show();
                setTimeout(function() {
                    $('#registerModal').modal('hide'); // Cerrar el modal
                    window.location.href = registerUrl;
                }, 3000);
            },
            error: function() {
                $('#message').text('Error en el registro. Intente nuevamente.').css('color', 'red').show();
            }
        });
    });

    $('#loginForm').on('submit', function(e) {
        e.preventDefault(); // Evitar el envío normal del formulario

        var email = $('#loginEmail').val();
        var password = $('#loginPassword').val();

        // Realizar la solicitud AJAX
        $.ajax({
            type: 'POST',
            url: registerUrl+'includes/login.php', 
            data: {
                email: email,
                password: password
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#message').text(response.message).css('color', 'green').show();
                    $('#loginModal').modal('hide'); // Cerrar el modal

                    // Opcional: Redirigir o actualizar la página
                    setTimeout(function() {
                        window.location.reload(); // Recargar la página
                    }, 2000); // Esperar 2 segundos antes de recargar
                } else {
                    $('#message').text(response.message).css('color', 'red').show();
                }
            },
            error: function(xhr, status, error) {
                $('#message').text('Error en la solicitud.').css('color', 'red').show();
            }
        });
    });

});


document.addEventListener('DOMContentLoaded', (event) => {
    // Seleccionamos el modal
    const detallePaqueteModal = document.getElementById('detallePaqueteModal');

    // Evento que se dispara cuando se abre el modal
    detallePaqueteModal.addEventListener('show.bs.modal', function (event) {
        // Botón que disparó el modal
        const button = event.relatedTarget;

        // Obtenemos los datos del botón que abrió el modal
        const titulo = button.getAttribute('data-titulo');
        const contenido = button.getAttribute('data-contenido');
        const whatsapp = button.getAttribute('data-whatsapp');

        // Actualizamos el título del modal
        const modalTitle = detallePaqueteModal.querySelector('.modal-title');
        modalTitle.textContent = titulo;

        // Actualizamos el contenido del modal
        const modalBodyContent = detallePaqueteModal.querySelector('#detalleContenido');
        modalBodyContent.innerHTML = contenido;

        // Actualizamos el enlace de WhatsApp
        const whatsappLink = detallePaqueteModal.querySelector('#whatsappLink');
        whatsappLink.href = `https://wa.me/${whatsapp.replace(/[-\s]/g, '')}`;
    });
});
