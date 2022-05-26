<?php

    $conexion = mysqli_connect("localhost","root","","pnostra");
    
    if($conexion){
        echo 'Conectado exitosamente a la base de datos';
    }else{
        echo 'Error al conectarse a la base de datos';
    }