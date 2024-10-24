<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senda Verde - Agencia de Viajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Enlace al CSS personalizado -->
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
        <?php 
            include '../includes/menu.php';
        ?>
    </div>

        <!-- Ofertas -->
    <div class="container-xl mt-6">
        <h2>Ofertas Destacadas</h2>
        <div class="row">
            <?php 

        foreach ($ofertas as $oferta) {
            $precioNormal = $oferta['precioNormal'];
            $precioOferta = $oferta['precioOferta'];

            // Aplicar 10% de descuento si el usuario está logueado
            if ($usuarioLogueado) {
                $precioOferta *= 0.9; // Aplicar un 10% de descuento adicional
            }

            ?>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4><?php echo $oferta['destino']; ?></h4>
                        </div>
                        <img src="../<?php echo $oferta['imagen']; ?>" class="card-img-top" alt="<?php echo $oferta['titulo']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $oferta['titulo']; ?></h5>
                            <p class="card-text"><?php echo $oferta['descripcion']; ?></p>
                            <div class="precio">
                                <h4 class="precio-actual text-success">S/. <?php echo number_format($precioOferta, 2); ?></h4>
                                <p class="precio-anterior text-muted"><del>S/. <?php echo number_format($precioNormal, 2); ?></del></p>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detallePaqueteModal"
                                    data-titulo="<?php echo $oferta['titulo']; ?>"
                                    data-contenido="<?php echo $oferta['detalle']; ?>"
                                    data-whatsapp="999-999-999">
                                Más información
                            </button>
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
