<?php

	$destinatario = "xx@xx.com ";
	$asunto = "Prueba";
	$cuerpo = '
	<html>
		<head>
			<title>Envio de mail</title>
		</head>
		<body>
			<h1>Hola!</h1>
		</body>
	</html>';
	$headers .= "Content-type: text/html; charset=iso-8859- 1\r\n";
	$headers .= "From: NN <nn@nn.com>\r\n";
	$headers .= "Reply-To: ss@ss.com\r\n";
	$headers .= "Cc: yy@yy.com\r\n";
	$headers .= "Bcc: zz@zz.com, pp@pp.com\r\n";
	mail($destinatario,$asunto,$cuerpo,$headers)
	echo 'Mensaje enviado...'

?>