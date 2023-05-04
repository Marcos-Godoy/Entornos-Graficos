<?php
	// Script que le envia por mail una pagina web a otra persona.
	// Podria hacer tambien la parte html

	
	$destinatario = "maildeamigo@gmail.com"; // se manda a esta direccion
	$asunto = "Página Web Recomendada";
	$cuerpo = '
	<html>
		<head>
			<title>Página Web Recomendada</title>
		</head>
		<body>
			<h1>Página Web Recomendada</h1>
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