<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Senda Verde</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/ofertas.php">Ofertas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Destinos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contáctanos</a>
            </li>
            <?php if (isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <a class="btn btn-primary" href="perfil.php">Perfil</a> <!-- Enlace al perfil del usuario -->
                </li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <span class="navbar-text">Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>&nbsp;</span>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-danger me-2" href="<?=BASE_URL?>/includes/logout.php">Cerrar Sesión</a> <!-- Enlace para cerrar sesión -->
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="btn btn-outline-primary me-2" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</a>

                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Registro</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
