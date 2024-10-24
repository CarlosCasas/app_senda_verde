<?php
require 'funciones.php'; 

// Recoger el correo electrónico del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Verificar que el correo sea válido
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Asunto del correo
        $suscripcionExistente = verificarSuscripcion($email,$pdo);

        if ($suscripcionExistente && $suscripcionExistente['existe'] == 1) {
            // El correo ya está suscrito
            echo "<p class='text-warning'>Ya estás suscrito a nuestras ofertas.</p>";
        }else{
            $subject = "¡Gracias por suscribirte a nuestras ofertas!";
            
            // Mensaje que se enviará al usuario
            $message = "
            <html>
            <head>
                <title>Confirmación de suscripción</title>
            </head>
            <body>
                <h2>¡Gracias por suscribirte a nuestras ofertas!</h2>
                <p>Hola,</p>
                <p>Te confirmamos que te has suscrito exitosamente a nuestra lista de promociones. A partir de ahora recibirás ofertas y novedades exclusivas.</p>
                <p>Si en algún momento deseas darte de baja, puedes contactarnos o utilizar el enlace de cancelación en nuestros correos.</p>
                <p>¡Gracias por confiar en nosotros!</p>
                <br>
                <p>Atentamente,</p>
                <p><strong>Equipo de Promociones</strong></p>
            </body>
            </html>
            ";

            // Encabezados para que el correo sea interpretado como HTML
            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Encabezados adicionales
            $headers .= "From: promociones@asistencia-asonedh.com" . "\r\n";

            // Enviar el correo
            if (mail($email, $subject, $message, $headers)) {
                insertarSuscripcion($email,$pdo);
                echo "<p class='text-success'>¡Gracias! Te has suscrito correctamente. Revisa tu correo para más información.</p>";
            } else {
                echo "<p class='text-danger'>Hubo un error al enviar el correo. Intenta de nuevo más tarde.</p>";
           }
        }
    } else {
        echo "<p class='text-danger'>Correo electrónico no válido. Por favor ingresa un correo correcto.</p>";
    }
}
?>
