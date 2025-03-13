<?php
    session_start();
    $_SESSION['id'] = 1;

    if(isset($_POST['nombre']) && isset($_POST['raza'])) {
        $nombre = $_POST['nombre'];
        $raza = $_POST['raza'];

        $con = mysqli_connect("localhost", "root", "");
        mysqli_select_db($con, "finales");

        $sql = "insert into mascotas (nombre, raza, cliente_id) values ('$nombre', '$raza', ".$_SESSION['id'].")";
        $res = mysqli_query($con, $sql);
        if($res) {
            echo "Mascota registrada";
            echo "<br><a href='ejemplo.html'>Volver</a>";
        } else {
            echo "Error al registrar mascota";
            echo "<br><a href='ejemplo.html'>Volver</a>";
        }
        mysqli_close($con);
    }

    $cadena = "a";
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "finales");
    $sql = "select * from historiales where comentario like '%". $cadena . "%'";
    $res = mysqli_query($con, $sql);
    echo "<h2>Historiales encontrados: </h2>";
    while($fila = mysqli_fetch_array($res)) {
        echo $fila['id'] . " - " . $fila['comentario'] . "<br>";
    }
    mysqli_close($con);

?>