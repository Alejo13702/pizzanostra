<?php

$inc = include '../conection.php';

if ($inc) {
    $consulta = "SELECT * FROM pizza";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $tipoPizza = $row['tipo_pizza'];
            $cantidad = $row['cantidad'];
?>
            <div>
                <p><?php echo "Pizza: " . $tipoPizza; ?></br>
                <p><?php echo "Stock: " . $cantidad; ?></br>
                    <br>
            </div>
        <?php
        }
    }
}

if ($inc) {
    $consulta = "SELECT * FROM acompaniantes";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $acompaniantes = $row['acompaniantes'];
            $cantidad = $row['cantidad'];
        ?>
            <div>
                <p><?php echo "Acompañantes: " . $tipoPizza; ?></br>
                <p><?php echo "Stock: " . $cantidad; ?></br>
                    <br>
            </div>
<?php
        }
    }
}
