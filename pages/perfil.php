<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirigir si no está logueado
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Perfil de Usuario</h1>
        <form action="update_profile.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </form>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
