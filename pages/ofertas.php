<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senda Verde - Agencia de Viajes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Enlace al CSS personalizado -->
</head>
<body>
    <!-- Incluir encabezado -->
    <?php 
        include '../includes/header.html';
    ?>
     <?php 
        include '../includes/menu.html';
    ?>

    <div class="page-banner">

        <img src="../assets/images/ofertas-banner.png" class="d-block w-100" alt="Destinos">

    </div>

    <!-- Ofertas -->
    <div class="container mt-5">
        <h2>Ofertas Destacadas</h2>
        <div class="row">
            <!-- Ejemplo de columnas de ofertas -->
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/ofertas/oferta1.jpg" class="card-img-top" alt="Oferta 1"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 1</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/ofertas/oferta2.jpg" class="card-img-top" alt="Oferta 2"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 2</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/ofertas/oferta3.jpg" class="card-img-top" alt="Oferta 3"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 3</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/ofertas/oferta4.jpg" class="card-img-top" alt="Oferta 4"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 4</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
   


    <!-- Incluir pie de página -->
    <?php 
        include '../includes/footer.html';
    ?>

    <!-- Librerías JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script> <!-- Enlace al JS personalizado -->
</body>
</html>
