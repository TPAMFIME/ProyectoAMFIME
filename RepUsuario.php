<?php
require_once 'Lib.php';

echo "<h1 align= 'center'> Reporte Usuarios </h1>";

$usuarios = getUser();

echo "<p>";
echo "<table rules = 'all' align = 'center' style = 'text-align: center'  border ='1'>";
echo "<tr>";
echo "<td>Id</td>";
echo "<td>Username</td>";
echo "<td>Nombre</td>";
echo "<td>Apellido</td>";
echo "<td>Telefono</td>";
echo "<td>Correo</td>";
echo "<td>Direccion</td>";
echo "<td>Action</td>";
echo "</tr>";

foreach ($usuarios as $key => $val) {
	echo "<tr>";
	echo "<td>{$val->id}</td>";
	echo "<td>{$val->username}</td>";
	echo "<td>{$val->nombre}</td>";
	echo "<td>{$val->apellido}</td>";
	echo "<td>{$val->tel}</td>";
	echo "<td>{$val->correo}</td>";
	echo "<td>{$val->dir}</td>";
	echo "<td> <button onclick = 'borrar({$val->id})'>Borrar</button> 
	<button onclick =\"editar({$val->id},'{$val->username}','{$val->nombre}','{$val->apellido}','{$val->tel}','{$val->correo}','{$val->dir}')\">Editar</button> </td>";
	echo "</tr>";
}

echo "</table>";
?>