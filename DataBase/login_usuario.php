<?php



include 'conection.php';

$correo_electronico =  $_POST['correo_electronico'];
$contrasena = $_POST["contrasena"];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo_electronico = '$correo_electronico' and contrasenia = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    header("location: ../after_login/index.php");
    exit;
} else {
    echo '
            <script>
                alert("Usuario no exite, verifique datos");
                window.location = "../register_login/register_login.html";
            </script>
        ';
    exit();
}
