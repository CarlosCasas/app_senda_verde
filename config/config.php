<?php
// config.php

// Captura la URL base del proyecto
$protocol = (!empty($_SERVER['HTTPS'])) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
//$projectRoot = dirname($_SERVER['SCRIPT_NAME']); 

// Define la URL base
define('BASE_URL', $protocol . $host . '/app_senda_verde'. '/');

?>
