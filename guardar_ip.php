<?php
if (isset($_POST['ip'])) {
    $ip = $_POST['ip'];
    $archivo = 'ips_guardadas.txt';
    
    // Guardar la IP en el archivo
    $file = fopen($archivo, 'a');
    fwrite($file, $ip . " - " . date("Y-m-d H:i:s") . "\n");
    fclose($file);
    
    echo "IP guardada correctamente";
} else {
    echo "No se recibió ninguna IP";
}
?>
