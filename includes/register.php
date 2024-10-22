<?php
// Incluir la conexión a la base de datos
require 'db_connect.php'; // Asegúrate de que este archivo tenga la conexión PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $interes = $_POST['intereses'];
    $contrasena = trim($_POST['password']);    
    global $pdo; 


    // Hashear la contraseña
    $hashedPassword = password_hash($contrasena, PASSWORD_DEFAULT);

    // Preparar la declaración SQL
    $stmt = $pdo->prepare("INSERT INTO usuario (nombre, email, celular, interes, contrasena) VALUES (?, ?, ?, ?, ?)");

    try {
        $stmt->execute([$nombres, $email, $celular, $interes, $hashedPassword]);
        
        // Respuesta exitosa
        echo json_encode(['success' => true, 'message' => 'Registro exitoso.']);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => "Error al insertar el registro: " . $e->getMessage()]);
    }

}


?>
