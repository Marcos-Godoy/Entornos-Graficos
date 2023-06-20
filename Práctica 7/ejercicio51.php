<?php
session_start();

// Recuperar los valores del formulario de inicio de sesión
$nombre = $_POST['nombre']; // se podria hacer con extract($_POST)
$clave = $_POST['clave'];

// almacenar los valores en las variables de sesión
$_SESSION['nombre'] = $nombre;
$_SESSION['clave'] = $clave;

// Redireccionar a la tercera página
header("Location: ejercicio52.php");
?>
