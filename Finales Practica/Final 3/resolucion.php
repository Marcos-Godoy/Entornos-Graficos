<?php

    session_start();

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'finales');

    $canti = $_POST['cantidad'];
    echo gettype($canti);

    if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['producto']) && isset($_POST['cantidad']) && isset($_POST['mes']) && isset($_POST['acepto'])) {
        if($_POST['nombre'] == '' || $_POST['email'] == '' || $_POST['producto'] == '' || $_POST['cantidad'] == '' || $_POST['mes'] == '' || $_POST['acepto'] == '') {
            echo "No se han recibido los datos correctamente";
            return;
        }
        if(gettype($_POST['nombre']) != 'string' || gettype($_POST['email']) != 'string' || gettype($_POST['producto']) != 'string' || gettype($_POST['cantidad']) != 'integer' || gettype($_POST['mes']) != 'string' || gettype($_POST['acepto']) != 'string') {
            echo "No se han recibido los datos correctamente";
            return;
        }
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $mes = $_POST['mes'];
        $acepto = $_POST['acepto'];
        echo gettype($acepto);

        $sql = "select * from productos where email = '$email' and mes = '$mes' and cantidad = '$cantidad'";
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res) > 0) {
            echo "Error... ya se ha registrado un producto con ese email, mes y cantidad";
            return;
        }

        $fecha = date('Y-m-d H:i:s');
        $sql = "insert into productos (nombre, email, nombre_producto, cantidad, mes, acepto, fecha) values ('$nombre', '$email', '$producto', '$cantidad', '$mes', '$acepto', '$fecha')";
        mysqli_query($con, $sql);

        $_SESSION[$fecha]['nombre'] = $nombre;
        $_SESSION[$fecha]['email'] = $email;
        $_SESSION[$fecha]['producto'] = $producto;
        $_SESSION[$fecha]['cantidad'] = $cantidad;
        $_SESSION[$fecha]['mes'] = $mes;
        $_SESSION[$fecha]['acepto'] = $acepto;

        echo $_SESSION[$fecha]['nombre'];

        setcookie('ultimo', $fecha, time() + 3600);

        
    } else {
        echo "No se han recibido los datos correctamente";
    }

?>