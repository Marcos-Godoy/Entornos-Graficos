<?php
	
	$destino="mjgodoy2002@gmail.com"; // mail al que se va a enviar el correo
	$asunto="Prueba de mail";
	// recupera los datos del formulario html 
	$desde='From:' .$_POST['email'];
	$comentario = "
	\n
	Nombre: $_POST[nombre]\n
	Email: $_POST[email]\n
	Consulta: $_POST[mensaje]\n
	\n";
	mail($destino,$asunto,$comentario,$desde);
	echo "Enviado...";
	
?>