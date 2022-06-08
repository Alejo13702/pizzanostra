<?php

include '../conection.php';

$administrador_id = 1;
$tipo_pizza = $_POST['tipo_pizza'];
$cantidad = $_POST['cantidad'];
$tamanio = $_POST['tamanio'];
$precio = $_POST['precio'];
$tiempo_preparacion = $_POST['tiempo_preparacion'];

$query = "INSERT INTO pizza(tipo_pizza, cantidad, tamanio, precio, tiempo_preparacion, admin_id	) 
                VALUES('$tipo_pizza','$cantidad','$tamanio','$precio','$tiempo_preparacion', '$administrador_id')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            
            alert("Pizza agregada");
            
        </script>';
} else {
    echo '<script>
            alert("Intentalo de nuevo");
            
        </script>';
}

mysqli_close($conexion);
