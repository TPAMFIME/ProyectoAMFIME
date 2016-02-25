<?php
require_once 'MenuUsuario.php';
?>
	<link rel="stylesheet" type="text/css" href="FondoU.css"/>
<head>
	<title>GameLand - Clientes</title>
</head>
<script src="jquery-2.1.4.min.js"> </script>
<script>

	function borrar(id) {
		$.post("DeleteCliente.php", { id: id})
		.done (function (data) {
			$('#estatus').html(data);
		});
	}
	
</script>

<div id = "estatus">
	<?php
		require_once 'RepCliente.php'
	?>
</div>
