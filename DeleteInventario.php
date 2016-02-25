<?php

require_once 'Lib.php';

$id = $_POST['id'];

if(borrarProducto1($id)) {
	if (borrarProducto2($id)){
	} else{
		echo "<h1 align = 'center'>No se logro borrar Inventario </h1>";	
		}
	} else { 
		echo "<h1 align = 'center'>No se logro borrar Producto</h1>";	
	}

require_once 'RepInventario.php';

?>