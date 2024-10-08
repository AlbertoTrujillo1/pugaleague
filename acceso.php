<?php
session_start();
require 'auth.php';

if (!isAuthenticated()) {
    header("Location: login.html"); // Redirigir si no está autenticado
    exit;
}

$ips = file_get_contents('ips.txt'); // Leer las IPs
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso IPs</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #0a0a0a;
            color: #00FF00;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>IPs Guardadas</h1>
    <pre><?php echo htmlspecialchars($ips); ?></pre> <!-- Muestra las IPs -->
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
