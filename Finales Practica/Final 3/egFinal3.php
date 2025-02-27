<?php

    // FALTA VERIFICAR FORMATOS
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST['nombre']) && !empty($_POST['producto'] && !empty($_POST['cantidad']) && !empty($_POST['acepto']) && !empty($_POST['email']) && !empty($_POST['mes']))){
            $nombre = $_POST['nombre'];
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $acepto = $_POST['acepto'];
            $email = $_POST['email'];
            $mes = $_POST['mes'];
            
            $_SESSION[date("Y-m-d H:i:s")]['nombre'] = $nombre;
            $_SESSION[date("Y-m-d H:i:s")]['producto'] = $producto;
            $_SESSION[date("Y-m-d H:i:s")]['cantidad'] = $cantidad;
            $_SESSION[date("Y-m-d H:i:s")]['acepto'] = $acepto;
            $_SESSION[date("Y-m-d H:i:s")]['email'] = $email;
            $_SESSION[date("Y-m-d H:i:s")]['mes'] = $mes;

            setcookie("ultimaVisita", date("Y-m-d H:i:s"), time() + 3600);

        } else {
            echo "Faltan datos";
        }
    }

    $fecha = date("Y-m-d");
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "finales");

    $sql = "select * from productos where email = '$email' and mes = '$mes' and cantidad = '$cantidad'";
    $res = mysqli_query($con, $sql);
    if(mysqli_num_rows($res) > 0){
        echo "Ya se ha registrado un producto con los mismos datos";
        mysqli_close($con);
        return;
    }
    $sql = "insert into productos values ('$nombre', '$email', '$producto', '$mes', '$cantidad', '$acepto', '$fecha')";
    mysqli_query($con, $sql);

    mysqli_close($con);
    



?>