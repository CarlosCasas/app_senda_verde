<?php
require 'db_connect.php'; 

// Función para verificar si el correo ya está suscrito
function verificarSuscripcion($email,$pdo) {
    $stmt = $pdo->prepare("SELECT count(1) existe FROM suscripcion WHERE email = :email and estado=1 LIMIT 1");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Función para insertar un nuevo registro en la tabla suscripción
function insertarSuscripcion($email,$pdo) {
    $stmt = $pdo->prepare("INSERT INTO suscripcion (email) VALUES (:email)");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    return $stmt->execute();
}

?>