<?php
	session_start(); // inicia sesion
?>
<html>
	<body>
		<a href="ejercicio4.php"></a>
		<?php
			echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
		?>
		<br>
		<br>
		<a href="ejercicio4.php">Otra página</a>
	</body>
</html>