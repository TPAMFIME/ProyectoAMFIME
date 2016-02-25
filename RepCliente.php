
<?php
require_once 'Lib.php';
echo "<h1 align = 'center'>Clientes</h1>";
$cliente = getCliente();


echo "<table border = '1' align='center'>";

echo "<tr>";
echo "<td>Id</td>";
echo "<td>Username</td>";
echo "<td>Nombre</td>";
echo "<td>Apellido</td>";
echo "<td>Telefono</td>";
echo "<td>Direccion</td>";
echo "<td>Correo</td>";
echo "<td>Desde</td>";
echo "<td>Action</td>";
echo "</tr>";

foreach ($cliente as $key => $val) {
	echo "<tr>";
	echo "<td>{$val->id}</td>";
	echo "<td>{$val->username}</td>";
	echo "<td>{$val->nombre}</td>";	
	echo "<td>{$val->apellido}</td>";
	echo "<td>{$val->tel}</td>";
	echo "<td>{$val->dir}</td>";
	echo "<td>{$val->correo}</td>";
	echo "<td>{$val->since}</td>";
	echo "<td><button onclick='borrar({$val->id})'>Borrar</button></td>";
	echo "</tr>";
}

echo "</table>";
?>
