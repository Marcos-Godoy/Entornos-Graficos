<!DOCTYPE html>
<html>
<head>
  <title>Simulador de periódico</title>
</head>
<body>
  <?php
    // Comprobar si se ha seleccionado un titular
    if (isset($_POST['titular'])) {
      $titular = $_POST['titular'];
      setcookie('titular', $titular, time() + (365 * 24 * 60 * 60)); // Almacenar la selección en una cookie válida durante 1 año
    } else {
      if (isset($_COOKIE['titular'])){
        $titular = $_COOKIE["titular"];
      }
    } 

    // Comprobar si se ha borrado la cookie
    if (isset($_GET['delete_cookie'])) {
      setcookie('titular', '', time() - 3600); // Establecer el tiempo de expiración de la cookie en el pasado para borrarla
    }

    // Mostrar los titulares
    if (isset($titular)) {
      echo $titular;
    } else {
      echo "politica economica deportiva";
    }
    ?>

  <h2>Titulares</h2>
  <form method="post" action="ejercicio4.php">
    <div>
      <input type="radio" name="titular" value="politica">
      Noticia política
    </div>
    <div>
      <input type="radio" name="titular" value="economica">
      Noticia económica
    </div>
    <div>
      <input type="radio" name="titular" value="deportiva">
      Noticia deportiva
    </div>
    <button type="submit">Guardar</button>
  </form>

  <a href="borrar_cookie.php">Borrar cookie</a>
</body>
</html>
