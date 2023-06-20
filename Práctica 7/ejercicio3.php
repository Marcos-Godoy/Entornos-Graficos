<?php
	if(isset($_POST["nombre"])){
		$nombre = $_POST["nombre"]; // actulizo o creo cookie
		setcookie("nombre", $nombre, time() + (60*60*24*90));
	} else{ //si el usuario no manda nada, me fijo si tengo cookie
		if (isset($_COOKIE["nombre"])){
			$nombre = $_COOKIE["nombre"];
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Carga nombre usuario</title>
		<?php
			if (isset($nombre)){
				echo '<p>' . $nombre . '</p>';
			}
		?>
	</head>
	<body>
		<p>
		<form action="ejercicio3.php" method="post">
			<br>
			Ingrese el nombre de usuario:
			<input type="text" name="nombre">
			<input type="submit" value="Cargar nombre">
		</form>
	</body>
</html>