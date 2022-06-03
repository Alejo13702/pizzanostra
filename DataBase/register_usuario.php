<?php

include 'conection.php';

$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$query = "INSERT INTO usuario(nombre, correo_electronico, usuario, contrasenia, telefono, direccion) 
                VALUES('$nombre','$correo_electronico','$usuario','$contrasena','$telefono','$direccion')";

//verificar correo para que no se repita
$vereficar_correo = mysqli_query($conexion, "SELECT * FROM  usuario WHERE correo_electronico='$correo_electronico'");

if (mysqli_num_rows($vereficar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya esta registrado");
            window.location = "../register_login/register_login.html";
        </script>
    ';

    exit();
}

//verificar usuario para que no se repita
$vereficar_usuario = mysqli_query($conexion, "SELECT * FROM  usuario WHERE usuario='$usuario'");

if (mysqli_num_rows($vereficar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya esta registrado");
            window.location = "../register_login/register_login.html";
        </script>
    ';

    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            window.location = "../register_login/register_login.html";
            alert("Usuario Registrado");
            
        </script>';
} else {
    echo '<script>
            alert("Intentalo de nuevo, usuario no registrado");
            window.location = "../register_login/register_login.html";
        </script>';
}

mysqli_close($conexion);
