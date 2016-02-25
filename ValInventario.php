<?php
require_once 'Lib.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$anio = $_POST['anio'];
$imagen = $_POST['imagen'];



if(agregarProducto($nombre, $descripcion,$precio,$anio,$imagen)) {
} else {
	echo "<h1 align = 'center'>No se logro guardar Producto</h1>";
}
if(rellenarProducto($nombre,$precio)){
}else {
	echo "<h1 align = 'center'>No se logro guardar Inventario</h1>";
}
require_once 'RepInventario.php';
?>
