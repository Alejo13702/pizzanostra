<?php

include '../conection.php';

$administrador_id = 1;
$cantidad = $_POST['cantidad'];
$acompaniantes = $_POST['acompaniantes'];
$precio = $_POST['precio'];
$tiempo_preparacion = $_POST['tiempo_preparacion'];


$query = "INSERT INTO acompaniantes(cantidad, acompaniantes, precio, tiempo_preparacion, administrador_id	) 
                VALUES('$cantidad','$acompaniantes','$precio','$tiempo_preparacion', '$administrador_id')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            
            alert("Acompañante agregado");
            
        </script>';
} else {
    echo '<script>
            alert("Intentalo de nuevo");
            
        </script>';
}

mysqli_close($conexion);

