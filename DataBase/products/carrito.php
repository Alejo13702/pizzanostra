<?php
include '../conection.php';

$pizza = $_POST['pizza'];
$acompaniante = $_POST['acompaniante'];
$idpizza;
$idacom;
$valor_total=0;
$tiempo_total=0;
?>
<?php 
		$sql="SELECT * from pizza";
			$result=mysqli_query($conexion,$sql);

			while($guardar=mysqli_fetch_array($result)){
			?>
			<?php if($pizza==$guardar['tipo_pizza']){
                                $idpizza=$guardar['id'];
                                $valor_total=$valor_total+$guardar['precio'];
                                $tiempo_total=$tiempo_total+$guardar['tiempo_preparacion']; 
                        }
                        
			}
                $sql="SELECT * from acompaniantes";
			$result=mysqli_query($conexion,$sql);

			while($guardar=mysqli_fetch_array($result)){
			?>
			<?php if($acompaniante==$guardar['acompaniantes']){
                                $idacom=$guardar['id'];
                                $valor_total = $valor_total+$guardar['precio'];
                                $tiempo_total=$tiempo_total+$guardar['tiempo_preparacion'];
                        }
                        
			}
?>
                
<?php
        $query = "INSERT INTO carrito(usuario_id, acompaniantes_id, pizza_id, valor_total, tiempo_total) 
             VALUES(1,'$idacom','$idpizza',$valor_total,$tiempo_total)";

        $ejecutar = mysqli_query($conexion, $query);

         
        if ($ejecutar) {
                ?>
                <script type="text/javascript">
                alert( "Carrito agregado. Valor total: <?php echo $valor_total; ?>");
                </script>
                <?php
        } else {
            echo '<script>
                    alert("Intentalo de nuevo");
                    
                </script>';
        }

        mysqli_close($conexion);