<<?php

    include '../conection.php';
    $nombre = "Alejandro Acosta";
    $direccion = "calle 2";
    $descripcion = "Pizza Peperoni";

    $query = "INSERT INTO pago(nombre, direccion, descripcion)
                VALUES('$nombre','$direccion','$descripcion')";


    $ejecutar = mysqli_query($conexion, $query);


    if ($ejecutar) {
        echo '
            <script>
                alert("Tu Pago ya ha exitoso, valor a pagar 150000 pesos");
            </script>
        ';
    }
