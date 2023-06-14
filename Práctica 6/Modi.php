<html>
	<head>
		<title>Modificacion</title>
	</head>
	<body>
		<?php
		include ("conexion.inc");
		//Captura datos desde el Form anterior
		$vciudad = $_POST['ciudad'];
		$vpais = $_POST['pais'];
		$vhabitantes = $_POST['habitantes'];
		$vsuperficie = $_POST['superficie'];
		$vtieneMetro = $_POST['tieneMetro'];
		//Arma la instrucción SQL y luego la ejecuta
		$vSql = "UPDATE Ciudades set habitantes='$vhabitantes', pais='$vpais', superficie='$vsuperficie' tieneMetro=$vtieneMetro where ciudad='$vciudad' ";
		mysqli_query($link,$vSql) or die (mysqli_error($link));
		echo("Ciudad fue Modificada<br>");
		echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
		// Cerrar la conexion
		mysqli_close($link);
		?>
	</body>
</html>