<?php
session_start(); // Iniciar la sesión

// Eliminar todas las variables de sesión
$_SESSION = [];

// Destruir la sesión
session_destroy();

// Redirigir a la página principal (index.php)
header("Location: ../index.php");
exit();
?>
