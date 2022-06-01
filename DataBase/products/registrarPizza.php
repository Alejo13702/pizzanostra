<?php

include '../conection.php';

$acompaniante = $_POST['acompaniante'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$tiempoPreparacion = $_POST['tiempo_preparacion'];


$sql = "INSERT INTO pizza VALUES('$cantidad',
            '$acompaniante',
            '$precio',
            '$tiempoPreparacion')";

$ejecutar = mysqli_query($conexion, $sql);

if (!$ejecutar) {
    echo '
        <script>
            alert("Error");
        </script>
    ';
    exit();
}
