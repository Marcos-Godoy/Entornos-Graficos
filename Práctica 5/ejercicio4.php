<?php
	session_start(); // inicio la sesion
?>
<html>
	<body>
		<?php
			if (!isset($_SESSION["contador"])){ // si la variable contador no esta definida, la inicializo en 1
				$_SESSION["contador"] = 1;
			} else { // sino le sumo una unidad
				$_SESSION["contador"]++;
			}
		?>
		<a href= "ejercicio4'.php">Otra pagina</a> <!-- anclaje a otra pagina. -->
	</body>
</html>