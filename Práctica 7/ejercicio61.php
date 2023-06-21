<?php
	session_start();
?>
<html>
	<head>
		<title>Recuperar mail</title>
	</head>
	<body>
		<?php
		include ("conexion.inc");
		//Captura datos desde el Form anterior
		$mail= $_POST['mail'];
		//Arma la instrucción SQL y luego la ejecuta
		$vSql = "select * FROM alumnos WHERE mail ='$mail'";
		$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
		$fila = mysqli_fetch_array($vResultado);
		if(mysqli_num_rows($vResultado) == 0) {
			echo ("El mail del alumno no esta guardado...!!! <br>");
		}
		else{
			$_SESSION['nombre'] = $fila['nombre'];
		}
		?>
		<a href="ejercicio62.php">Ir a pagina de bienvenida</a>;
	</body>
</html>