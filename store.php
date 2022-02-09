<?php
    include('conexion.php');

    if(count($_POST)>0){
        $nombre= $_POST['nombre'];
        $descripcion= $_POST['descripcion'];
        $cantidad= $_POST['cantidad'];
        $precio= $_POST['precio'];

        $sql ="INSERT INTO productos(Nombre, Descripcion, Cantidad, Precio)
        VALUES ('$nombre', '$descripcion', $cantidad, $precio)";

        $conn->exec($sql);
        header('Location: formulario.php');
    }




?>