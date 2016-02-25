<?php
require_once 'Lib.php';

$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$correo = $_POST['correo'];
$dir = $_POST['dir'];


if(agregarUser($usuario, $pwd, $nombre, $apellido, $tel, $correo, $dir)) {
} else {
	echo "<h1 align = 'center'>No se logro guardar </h1>";
}
	
require_once 'RepUsuario.php';
?>
