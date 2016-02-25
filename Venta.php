	<link rel="stylesheet" type="text/css" href="FondoU.css"/>
<head>
	<title>GameLand - Ventas</title>
</head>

<?php
require_once 'Lib.php';
require_once 'MenuUsuario.php';

echo "<h1 align= 'center'> Reporte Usuarios </h1>";

$venta = getVenta();

echo "<p>";
echo "<table rules = 'all' align = 'center' style = 'text-align: center'  border ='1'>";
echo "<tr>";
echo "<td>Id</td>";
echo "<td>Fecha</td>";
echo "<td colspan = '2'>Cliente</td>";
echo "<td>Producto</td>";
echo "<td>Cantidad</td>";
echo "<td>Precio</td>";
echo "</tr>";

foreach ($venta as $key => $val) {
	echo "<tr>";
	echo "<td>{$val->id}</td>";
	echo "<td>{$val->fecha}</td>";
	echo "<td>{$val->nombre}</td>";
	echo "<td>{$val->apellido}</td>";
	echo "<td>{$val->producto}</td>";
	echo "<td>{$val->cant}</td>";
	echo "<td>{$val->precio}</td>";
	echo "</tr>";
}

echo "</table>";
?>