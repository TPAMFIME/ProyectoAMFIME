<?php
require_once 'MenuUsuario.php';
?>
	<link rel="stylesheet" type="text/css" href="FondoU.css"/>
<head>
	<title>GameLand - Inventario</title>
</head>
<script src="jquery-2.1.4.min.js"> </script>
<script>
	function guardar() {
		var nombre = $('#nombre').val();
		var descripcion = $('#descripcion').val();
		var precio = $('#precio').val();
		var anio = $('#anio').val();
		var imagen = $('#imagen').val();
		
		
		$.post("ValInventario.php", { nombre: nombre, descripcion:descripcion, precio: precio,anio:anio, imagen:imagen})
		.done (function (data) {
			$('#estatus').html(data);
		});
		
		var nombre = $('#nombre').val('');
		var descripcion = $('#descripcion').val('');
		var precio = $('#precio').val('');
		var anio = $('#anio').val('');
		var imagen = $('#imagen').val('');
		
	}
	
	function borrar(id) {
		$.post("DeleteInventario.php", { id: id})
		.done (function (data) {
			$('#estatus').html(data);
			//alert("Data Loaded: " +data);
		});
	}
	
</script>
	<h1 align="center">Agregar Producto</h1>
	<table border="1" align="center">
		<tr>
			<td>Nombre</td>
			<td><input type="text" id="nombre" name="nombre"></td>
		</tr>
		<tr>
			<td>Descripcion</td>
			<td><input type="text" id="descripcion" name="descripcion"</td>
		</tr>
		
		<tr>
			<td>Precio</td>
			<td><input type="text" id="precio" name="precio"</td>
		</tr>
		<tr>
			<td>Anio</td>
			<td><input type="text" id="anio" name="anio"</td>
		</tr>
		<tr>
			<td>Imagen</td>
			<td><input type="text" id="imagen" name="imagen"</td>
		</tr>
		<tr>
		<td colspan="2" align="center"><button id = "btnGuardar" onclick="guardar()">Guardar</button> </td>
	</tr>
	</table>
	<div id = "estatus">
	<?php
		require_once 'RepInventario.php'
	?>
</div>

