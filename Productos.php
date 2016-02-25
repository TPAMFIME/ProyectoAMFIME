<?php
		require_once 'MenuPrincipal.php';
	?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>GameLand - Productos</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body alink="white" vlink="white" link="white">
	<section>
		
	<?php	$descripcion = $_GET['descripcion'];
		
		include 'conexion.php';
	
		$re=mysql_query("select * from producto where descripcion ='{$descripcion}'")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {

		?>
			<div class="producto">
			<center>
				<img width="100" height="100" src="./productos/<?php echo $f['imagen'];?>"></img><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carrito</a>
			</center>
		</div>
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>