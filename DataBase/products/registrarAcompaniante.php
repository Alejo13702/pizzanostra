<?php

include 'conection.php';

$tipoPizza = $_POST['tipo_pizza'];
$cantidad = $_POST['cantidad'];
$tamanio = $_POST['tamanio'];
$cantidadPorciones = $_POST['cantidad_porciones'];
$precio = $_POST['precio'];
$tiempoPreparacion = $_POST['tiempo_preparacion'];


$sql = "INSERT INTO pizza VALUES('$cantidad',
            '$tipoPizza',
            '$tamanio',
            '$cantidadPorciones',
            '$precio',
            '$tiempoPreparacion')";

$ejecutar = mysqli_query($con, $sql);

if (!$ejecutar) {
    echo "Hubo Algun Error";
}
