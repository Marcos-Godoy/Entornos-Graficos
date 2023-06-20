<!DOCTYPE html>
<html>
<head>
    <title>Formulario de carga de nombre y clave</title>
</head>
<body>
    <h2>Carga de datos</h2>
    <form action="ejercicio51.php" method="POST">
        <label for="nombre">Usuario:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="clave">Contraseña:</label>
        <input type="text" name="clave" id="clave" required><br><br>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>