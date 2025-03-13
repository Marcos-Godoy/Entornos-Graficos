<?php
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'finales');

    if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['comentario'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $comentario = $_POST['comentario'];

        $sql = "select * from jugadores where email = '$email'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "Ya has comentado";
        } else {
            $sql = "insert into jugadores (nombre, email, comentario) values ('$nombre', '$email', '$comentario')";
            mysqli_query($con, $sql);
            echo "Comentario enviado";
        }
    }
    mysqli_close($con);

?>