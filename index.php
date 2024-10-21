<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senda Verde - Agencia de Viajes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Enlace al CSS personalizado -->
</head>
<body>

    <!-- Incluir encabezado -->
    <?php 
        include 'includes/header.html';
    ?>
     <?php 
        include 'includes/menu.html';
    ?>

    <div class="container mt-4">
        
        <!-- Carrusel de imágenes -->
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/carrusel1.jpg" class="d-block w-100" alt="Destinos">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Explora Nuestros Destinos</h5>
                        <p>Descubre la belleza del mundo con Senda Verde.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carrusel2.jpg" class="d-block w-100" alt="Ofertas">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ofertas Inigualables</h5>
                        <p>Las mejores ofertas en viajes, solo para ti.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carrusel3.jpg" class="d-block w-100" alt="Aventura">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aventuras Inolvidables</h5>
                        <p>Vive experiencias únicas y memorables.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Ofertas -->
    <div class="container mt-5">
        <h2>Ofertas Destacadas</h2>
        <div class="row">
            <!-- Ejemplo de columnas de ofertas -->
            <div class="col-md-3">
                <div class="card">
                    <img src="oferta1.jpg" class="card-img-top" alt="Oferta 1"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 1</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="oferta2.jpg" class="card-img-top" alt="Oferta 2"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 2</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="oferta3.jpg" class="card-img-top" alt="Oferta 3"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 3</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="oferta4.jpg" class="card-img-top" alt="Oferta 4"> <!-- Cambia esto por la URL de tu oferta -->
                    <div class="card-body">
                        <h5 class="card-title">Destino 4</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Eventos -->
    <div class="container mt-5">
        <h2>Eventos</h2>
        <div class="row">
            <!-- Ejemplo de columnas de eventos -->
            <div class="col-md-3">
                <div class="card">
                    <img src="evento1.jpg" class="card-img-top" alt="Evento 1"> <!-- Cambia esto por la URL de tu evento -->
                    <div class="card-body">
                        <h5 class="card-title">Evento 1</h5>
                        <p class="card-text">Descripción del evento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="evento2.jpg" class="card-img-top" alt="Evento 2"> <!-- Cambia esto por la URL de tu evento -->
                    <div class="card-body">
                        <h5 class="card-title">Evento 2</h5>
                        <p class="card-text">Descripción del evento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="evento3.jpg" class="card-img-top" alt="Evento 3"> <!-- Cambia esto por la URL de tu evento -->
                    <div class="card-body">
                        <h5 class="card-title">Evento 3</h5>
                        <p class="card-text">Descripción del evento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="evento4.jpg" class="card-img-top" alt="Evento 4"> <!-- Cambia esto por la URL de tu evento -->
                    <div class="card-body">
                        <h5 class="card-title">Evento 4</h5>
                        <p class="card-text">Descripción del evento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Suscribirme -->
    <div class="container mt-5">
        <h2>¡Suscríbete!</h2>
        <form>
            <div class="form-group">
                <label for="email">Introduce tu correo electrónico:</label>
                <input type="email" class="form-control" id="email" placeholder="Ejemplo: correo@ejemplo.com" required>
            </div>
            <button type="submit" class="btn btn-primary">Suscribirme</button>
        </form>
    </div>

    <!-- Sección de Noticias -->
    <div class="container mt-5">
        <h2>Noticias</h2>
        <div id="newsCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="noticia1.jpg" class="card-img-top" alt="Noticia 1"> <!-- Cambia esto por la URL de tu noticia -->
                                <div class="card-body">
                                    <h5 class="card-title">Noticia 1</h5>
                                    <p class="card-text">Resumen de la noticia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="noticia2.jpg" class="card-img-top" alt="Noticia 2"> <!-- Cambia esto por la URL de tu noticia -->
                                <div class="card-body">
                                    <h5 class="card-title">Noticia 2</h5>
                                    <p class="card-text">Resumen de la noticia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="noticia3.jpg" class="card-img-top" alt="Noticia 3"> <!-- Cambia esto por la URL de tu noticia -->
                                <div class="card-body">
                                    <h5 class="card-title">Noticia 3</h5>
                                    <p class="card-text">Resumen de la noticia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="noticia4.jpg" class="card-img-top" alt="Noticia 4"> <!-- Cambia esto por la URL de tu noticia -->
                                <div class="card-body">
                                    <h5 class="card-title">Noticia 4</h5>
                                    <p class="card-text">Resumen de la noticia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Puedes agregar más elementos al carrusel aquí -->
            </div>
            <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- Incluir pie de página -->
    <?php 
        include 'includes/footer.html';
    ?>

    <!-- Librerías JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script> <!-- Enlace al JS personalizado -->
</body>
</html>
