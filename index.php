<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senda Verde - Agencia de Viajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Enlace al CSS personalizado -->
    
</head>
<body>

    <!-- Incluir encabezado -->
    <?php 
        include 'includes/header.html';
        require_once 'config/config.php';
    ?>
						  
    <div class="div-menu">
        <?php 
            include 'includes/menu.php';
        ?>
    </div>
		  



    <div class="container mt-4">
        
        <!-- Carrusel de imágenes -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/carrusel1.jpg" class="d-block w-100" alt="Destinos">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Explora Nuestros Destinos</h5>
                        <p>Descubre la belleza del mundo con Senda Verde.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/carrusel2.jpg" class="d-block w-100" alt="Ofertas">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ofertas Inigualables</h5>
                        <p>Las mejores ofertas en viajes, solo para ti.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/carrusel3.jpg" class="d-block w-100" alt="Aventura">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aventuras Inolvidables</h5>
                        <p>Vive experiencias únicas y memorables.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
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
                    <img src="assets/images/ofertas/oferta1.jpg" class="card-img-top" alt="Oferta 1"> 
                    <div class="card-body">
                        <h5 class="card-title">Destino 1</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/ofertas/oferta2.jpg" class="card-img-top" alt="Oferta 2"> 
                    <div class="card-body">
                        <h5 class="card-title">Destino 2</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/ofertas/oferta3.jpg" class="card-img-top" alt="Oferta 3"> 
                    <div class="card-body">
                        <h5 class="card-title">Destino 3</h5>
                        <p class="card-text">Descripción de la oferta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/ofertas/oferta4.jpg" class="card-img-top" alt="Oferta 4"> 
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
                    <img src="assets/images/eventos/evento1.jpg" class="card-img-top" alt="Evento 1"> <!-- Cambia esto por la URL de tu evento -->
                    <div class="card-body">
                        <h5 class="card-title">Evento 1</h5>
                        <p class="card-text">Descripción del evento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/eventos/evento2.jpg" class="card-img-top" alt="Evento 2"> <!-- Cambia esto por la URL de tu evento -->
                    <div class="card-body">
                        <h5 class="card-title">Evento 2</h5>
                        <p class="card-text">Descripción del evento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/eventos/evento3.jpg" class="card-img-top" alt="Evento 3"> <!-- Cambia esto por la URL de tu evento -->
                    <div class="card-body">
                        <h5 class="card-title">Evento 3</h5>
                        <p class="card-text">Descripción del evento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/eventos/evento4.jpg" class="card-img-top" alt="Evento 4"> <!-- Cambia esto por la URL de tu evento -->
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
            <div class="mb-3">
                <label for="email" class="form-label">Introduce tu correo electrónico:</label>
                <input type="email" class="form-control" id="emailSuscribirse" placeholder="Ejemplo: correo@ejemplo.com" required>
            </div>
            <button type="submit" class="btn btn-primary">Suscribirme</button>
        </form>
    </div>

    <!-- Sección de Noticias -->
    <div class="container mt-5">
        <h2>Noticias</h2>
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item carousel-noticia active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="assets/images/noticias/noticia1.jpg" class="card-img-top" alt="Noticia 1"> <!-- Cambia esto por la URL de tu noticia -->
                                <div class="card-body">
                                    <h5 class="card-title">Noticia 1</h5>
                                    <p class="card-text">Resumen de la noticia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="assets/images/noticias/noticia2.jpg" class="card-img-top" alt="Noticia 2"> <!-- Cambia esto por la URL de tu noticia -->
                                <div class="card-body">
                                    <h5 class="card-title">Noticia 2</h5>
                                    <p class="card-text">Resumen de la noticia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="assets/images/noticias/noticia3.jpg" class="card-img-top" alt="Noticia 3"> <!-- Cambia esto por la URL de tu noticia -->
                                <div class="card-body">
                                    <h5 class="card-title">Noticia 3</h5>
                                    <p class="card-text">Resumen de la noticia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="assets/images/noticias/noticia4.jpg" class="card-img-top" alt="Noticia 4"> <!-- Cambia esto por la URL de tu noticia -->
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
            <a class="carousel-control-prev" href="#newsCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#newsCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>
        </div>
    </div>

						 
									   
			  
										   
		  
			 

    <!-- Incluir pie de página -->
    <?php 
        include 'includes/footer.html';
    ?>
    <?php 
        include 'includes/modals.php';
        
    ?>
     <script>
        var registerUrl = '<?php echo BASE_URL; ?>';
        console.log("registerUrl:"+registerUrl);
    </script>
    <!-- Librerías JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- jQuery completo -->

    <script src="assets/js/scripts.js"></script> <!-- Enlace al JS personalizado -->
</body>
</html>
