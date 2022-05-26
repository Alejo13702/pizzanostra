<?php

    include 'conection.php';

    $nombre_completo = ['nombre_completo'];
    $correo = ['correo'];
    $usuario = ['usuario'];
    $contrasena = ['contrasena'];

    $query = "INSERT INTO usuario(nombre_completo,correo,usuario,contrasena) 
                VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

    $ejecutar = mysqli_query($conexion,$query);            