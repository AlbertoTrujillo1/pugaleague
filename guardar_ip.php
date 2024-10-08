<?php
session_start();
require 'auth.php'; // Incluimos el archivo de autenticación

if (!isAuthenticated()) {
    header("Location: login.html"); // Redirigir si no está autenticado
    exit;
}

if (isset($_POST['ip'])) {
    $ip = $_POST['ip'];
    $file = 'ips.txt';
    $current = file_get_contents($file);
    $current .= $ip . "\n";
    file_put_contents($file, $current);
    
    echo "IP guardada correctamente.";
} else {
    echo "No se recibió ninguna IP.";
}
?>
