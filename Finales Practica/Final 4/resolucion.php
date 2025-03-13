<?php


    if(empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['comentario'])){
        echo "Por favor, complete todos los campos";
    } else {
        echo "Comentario enviado";
    }


?>