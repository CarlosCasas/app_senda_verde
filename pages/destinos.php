<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senda Verde - Agencia de Viajes</title>
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
        $jsonData = file_get_contents('../includes/destinos.json');
        $ofertas = json_decode($jsonData, true);


    ?>

    <!-- Incluir encabezado -->
    <?php 
        include '../includes/header.html';
        require_once '../config/config.php';
    ?>
						  
    <div class="div-menu">
        <?php 
            include '../includes/menu.php';
        ?>
    </div>

    <div class="page-banner">

    <img src="../assets/images/destinos-banner.jpg" class="d-block w-100" alt="Destinos">

    </div>
    <br>

    <!-- Destinos -->
    <div class="container-xl mt-6">
        <h2>Destinos</h2>
        <div class="row">
            <?php 

        foreach ($ofertas as $oferta) {
            ?>
                <div class="col-md-3">
                    <div class="card text-center">
                        <img src="../<?php echo $oferta['imagen']; ?>" class="card-img-top" alt="<?php echo $oferta['titulo']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $oferta['destino']; ?></h5>
                            <p class="card-text"><?php echo $oferta['descripcion']; ?></p>                                                     
                        </div>
                    </div>
                </div>   
            <?php } ?>
        </div>
    </div>

    <br><br>
   


    <!-- Incluir pie de página -->
        <?php 
        include '../includes/footer.html';
    ?>
    <?php 
        include '../includes/modals.php';
        
    ?>

    <!-- Librerías JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- jQuery completo -->

    <script src="../assets/js/scripts.js"></script> <!-- Enlace al JS personalizado -->
</body>
</html>
