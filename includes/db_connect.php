<?php
// Configuración de la base de datos
$host = 'localhost'; // 
$dbname = 'app_senda_verde'; // Nombre de tu base de datos
$username = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña de la base de datos

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "Conexión exitosa a la base de datos!";
} catch (PDOException $e) {
    // Captura cualquier error y muestra un mensaje
    echo "Error de conexión: " . $e->getMessage();
}

// $pdo = null; 
?>
