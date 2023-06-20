<?php
  setcookie('titular', '', time() - 3600); // Establecer el tiempo de expiración de la cookie en el pasado para borrarla
  header('Location: ejercicio4.php'); // Redireccionar a la página principal después de borrar la cookie
?>
