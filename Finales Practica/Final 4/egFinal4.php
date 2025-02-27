<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['nombre']) && !empty($_POST['comentario']) && !empty($_POST['email'])){
            echo 'Envio correcto';
        } else {
            echo 'Faltan datos';
        }
    }
?>