<?php
session_start();

// Comprobar si las variables de sesión existen
if (isset($_SESSION['nombre']) && isset($_SESSION['clave'])) {
    $nombre = $_SESSION['nombre'];
    $clave = $_SESSION['clave'];

    // si existen mostrar los valores almacenados en las variables de sesión
    echo "Usuario: " . $_SESSION['nombre'] . "<br>";
    echo "Contraseña: " . $_SESSION['clave'] . "<br>";
} else {
    echo "No se encontraron valores de sesión.";
}
?>
