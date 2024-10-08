<?php
session_start();

// Credenciales de acceso (puedes cambiar esto a una base de datos en un sistema real)
$usuario = 'admin';
$contraseña = '1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === $usuario && $_POST['password'] === $contraseña) {
            $_SESSION['authenticated'] = true; // Establecer sesión
            header("Location: acceso.php"); // Redirigir al área de acceso
            exit;
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    }
}

function isAuthenticated() {
    return isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;
}
?>
