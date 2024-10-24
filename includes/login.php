<?php
session_start();

require 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recibir datos del formulario
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Preparar la consulta
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['contrasena'])) {
            $_SESSION['username'] = $user['nombre']; 
            $_SESSION['email'] = $user['email'];         
            $_SESSION['logged_in'] = true; 
            
            echo json_encode(['success' => true, 'message' => 'Inicio de sesión exitoso.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Correo o contraseña incorrectos.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Correo no encontrado.']);
    }
}
?>
