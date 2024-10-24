<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senda Verde - Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Enlace al CSS personalizado -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Enlace a Font Awesome -->

</head>
<body>

    <!-- Incluir encabezado -->
    <?php
        if (isset($_SESSION['username'])) {
            // Usuario ha iniciado sesión
            $usuarioLogueado = true;
        } else {
            // Usuario no ha iniciado sesión
            $usuarioLogueado = false;
        }

        // Leer el archivo JSON
        $jsonData = file_get_contents('../includes/ofertas.json');
        $ofertas = json_decode($jsonData, true);


    ?>

    <!-- Incluir encabezado -->
    <?php 
        include '../includes/header.html';
        require_once '../config/config.php';
    ?>
    
    <div class="div-menu">
        <?php include '../includes/menu.php'; ?>
    </div>

    <div class="container mt-5">
        <h2>Contacto</h2>
        <p>Estamos aquí para ayudarte. Si tienes alguna pregunta, no dudes en ponerte en contacto con nosotros.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h4>Información de Contacto</h4>
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-phone-alt"></i> Teléfono: <strong>999-999-999</strong>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i> Email: <strong>info@sandaverde.com</strong>
                    </li>
                </ul>
                
                <h4>Síguenos en Redes Sociales</h4>
                <ul class="list-unstyled d-flex">
                    <li class="me-3">
                        <a href="https://www.facebook.com" target="_blank" class="btn btn-primary">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="me-3">
                        <a href="https://www.twitter.com" target="_blank" class="btn btn-info">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com" target="_blank" class="btn btn-danger">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <h4>Ubicación</h4>
                <!-- Aquí puedes reemplazar con tu dirección de Google Maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345097584!2d144.95373531531696!3d-37.81627997975168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11f9e3%3A0x5045675218ceed30!2sSenda%20Verde%20Agencia%20de%20Viajes!5e0!3m2!1ses-419!2sco!4v1644379438443!5m2!1ses-419!2sco" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <br><br>
    <br><br>                
    <!-- Incluir pie de página -->
    <?php include '../includes/footer.html'; ?>

    <!-- Librerías JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- jQuery completo -->
    <script src="../assets/js/scripts.js"></script> <!-- Enlace al JS personalizado -->
</body>
</html>
