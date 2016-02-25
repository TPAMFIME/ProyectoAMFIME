<?php
require_once 'Lib.php';
echo "<h1 align = 'center'>Inventario</h1>";
$producto = getProducto();


echo "<table border = '1' align='center'>";

echo "<tr>";
echo "<td>Id</td>";
echo "<td>Producto</td>";
echo "<td>Precio</td>";
echo "<td>Anio</td>";
echo "<td>Cantidad</td>";
echo "<td>Action</td>";
echo "</tr>";

foreach ($producto as $key => $val) {
	echo "<tr>";
	echo "<td>{$val->id}</td>";
	echo "<td>{$val->nombre}</td>";	
	echo "<td>{$val->precio}</td>";
	echo "<td>{$val->anio}</td>";	
	echo "<td>{$val->cant}</td>";
	echo "<td><button onclick='borrar({$val->id})'>Borrar</button></td>";
	echo "</tr>";
}

echo "</table>";
?>
