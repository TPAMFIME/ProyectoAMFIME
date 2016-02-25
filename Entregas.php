<?php
require_once 'MenuUsuario.php';
?>
	<link rel="stylesheet" type="text/css" href="FondoU.css"/>
<head>
	<title>GameLand - Entregas</title>
</head>
<script src="jquery-2.1.4.min.js"> </script>
<script>
	function guardar() {
		var proveedor_id = $('#proveedor_id').val();
		var prod_id = $('#prod_id').val();
		var cant = $('#cant').val();
		
				
		$.post("ValEntrega.php", { proveedor_id:proveedor_id, prod_id: prod_id, cant:cant})
		.done (function (data) {
			$('#estatus').html(data);
		});
		
		var proveedor_id = $('#proveedor_id').val('');
		var prod_id = $('#prod_id').val('');
		var cant = $('#cant').val('');
		
		
	}

	
</script>
	<h1 align="center">Entrega</h1>
	<table border="1" align="center">
		<tr>
			<td>Proovedor</td>
			<td><input type="text" id="proveedor_id" name="proveedor_id"></td>
		</tr>
		<tr>
			<td>Id de Producto</td>
			<td><input type="text" id="prod_id" name="prod_id"</td>
		</tr>
		
		<tr>
			<td>Cantidad</td>
			<td><input type="text" id="cant" name="cant"</td>
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
