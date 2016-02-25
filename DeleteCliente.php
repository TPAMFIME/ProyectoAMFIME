<?php

require_once 'Lib.php';

$id = $_POST['id'];

if(borrarCliente($id)) {
}else { 
		echo "<h1 align = 'center'>No se logro borrar Producto</h1>";	
	}

require_once 'RepCliente.php';

?>