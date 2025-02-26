<?php

    if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['comentario'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $comentario = $_POST['comentario'];
        echo 'Todos los campos se han enviado correctamente';
    } else {
        echo 'No se han enviado todos los campos';
    }

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'prueba');

    $query = "select * from tabla where email = '$email'";
    $res = mysqli_query($con, $query);
    $filas = mysqli_num_rows($res);
    if($filas > 0) {
        echo 'El email ya existe';
    } else {
        $query = "insert into tabla (nombre, email, comentario) values ('$nombre', '$email', '$comentario')";
        mysqli_query($con, $query);
    }
    mysqli_close($con);

?>