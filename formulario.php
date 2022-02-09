<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexion.php');
    ?>
    <h1>Formulario</h1>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>

    <form action="store.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br><br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion">
        <br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad">
        <br><br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>