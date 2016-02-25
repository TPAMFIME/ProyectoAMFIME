<?php
session_start();
require_once 'Lib.php';

$proveedor_id = $_POST['proveedor_id'];
$prod_id = $_POST['prod_id'];
$cant = $_POST['cant'];
$id = $_SESSION['id'];



if(guardaEntrega($proveedor_id, $id->id, $prod_id, $cant)){
}else {
	echo "<h1 align = 'center'>No se logro guardar la entrega </h1>";
}

if(getCantidad($prod_id,$cant)) {
} else {
	echo "<h1 align = 'center'>No se encontro el producto </h1>";
}

require_once 'RepInventario.php';
?>
