<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pizzeria');


?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="var.css">
	<link rel="icon" href="../img/pizzaico.ico">
	<title>Menú</title>
</head>

<body>

	<input type="checkbox" class="toggle-check" id="toggle" hidden>
	<label class="toggle" for="toggle">Menu</label>
	<div class="container-menu">
		<nav class="menu">
			<h1>leito</h1>
			<br>
			<a href="../carrito/index.html" class="item">Carrito</a>
			<a href="../register_login/register_login.html" class="item">Cerrar sesion</a>
		</nav>
	</div>


	<main>
		<div class="fondo">
			<table id="customers">
				<tr>
					<th>Pizza</th>
					<th>Tamaño</th>
					<th>Tiempo (Minutos)</th>
					<th>Costo</th>
				</tr>

				<?php
				$sql = "SELECT * from pizza";
				$result = mysqli_query($conexion, $sql);

				while ($mostrar = mysqli_fetch_array($result)) {
				?>

					<tr>
						<td><?php echo $mostrar['tipo_pizza'] ?></td>
						<td><?php echo $mostrar['tamanio'] ?></td>
						<td><?php echo $mostrar['tiempo_preparacion'] ?></td>
						<td><?php echo $mostrar['precio'] ?></td>
						<td><button id="btn">
								<h1>+</h1>
							</button></td>
					</tr>

				<?php
				}
				?>
			</table>
		</div>

		<div class="fondo_2">
			<table id="customers_2">
				<tr>
					<th>Acompañante</th>
					<th>Tiempo (Minutos)</th>
					<th>Costo</th>
				</tr>

				<?php
				$sql = "SELECT * from acompaniantes";
				$result = mysqli_query($conexion, $sql);

				while ($mostrar = mysqli_fetch_array($result)) {
				?>

					<tr>
						<td><?php echo $mostrar['acompaniantes'] ?></td>
						<td><?php echo $mostrar['tiempo_preparacion'] ?></td>
						<td><?php echo $mostrar['precio'] ?></td>
						<td><button>
								<h1>+</h1>
							</button></td>
					</tr>

				<?php
				}
				?>
			</table>
		</div>
	</main>


</body>

</html>