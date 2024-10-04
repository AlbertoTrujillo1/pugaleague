<?php
// Archivo: guardar_ip.php

// Obtener la IP del cliente
$ip = $_POST['ip'];

// Guardar la IP en un archivo de texto (se creará si no existe)
$file = 'ips.txt';
file_put_contents($file, $ip . PHP_EOL, FILE_APPEND);

// Retornar una respuesta exitosa
echo json_encode(["success" => true]);
?>
