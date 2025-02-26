<?php
    session_start();
    $cliente_id = 1;
    $_SESSION['cliente_id'] = $cliente_id;

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'finales');

    if(!empty($_POST['nombre']) && !empty($_POST['raza'])) {
        $nombre = $_POST['nombre'];
        $raza = $_POST['raza'];
        $sql = "insert into mascotas (nombre, raza, cliente_id) values ('$nombre', '$raza', '$cliente_id')";
        $res = mysqli_query($con, $sql);
        if($res) {
            echo "Mascota registrada";
        }else {
            echo "Error al registrar mascota";
        }
    }

    if(!empty($_POST['historial'])) {
        $historial = $_POST['historial'];
        $sql = "select * from historiales where comentario like '%$historial%'";
        $res = mysqli_query($con, $sql);
        echo "<h2>Historial de mascotas</h2>";
        while($fila = mysqli_fetch_array($res)) {
            echo $fila['comentario'] . "<br>";
        }
    }
    

    mysqli_close($con);
    echo '<br><a href="egFinal2.html">Volver</a>';
    
?>