<?php



include '../conection.php';

$correo =  $_POST['correo'];
$contrasena = $_POST["contrasena"];

$validar_login = mysqli_query($conexion, "SELECT * FROM administrador WHERE correo_electronico = '$correo' and contrasenia = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    header("location: ../../action_admin/index.html");
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
