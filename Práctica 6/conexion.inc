<?php
	
	// Estructura:
	// Bd -> Capitales
	// Tabla -> Ciudades
	// Columnas -> ciudad, pais, habitantes, superficie, tieneMetro

	$link = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");

	mysqli_select_db($link, "Capitales");
?>