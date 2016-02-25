<?php
require_once 'Lib.php';

$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$correo = $_POST['correo'];
$dir = $_POST['dir'];


if(agregarCliente($usuario, $pwd, $nombre, $apellido, $tel, $correo, $dir)) {
 ?>
 <h1 align="center"><a align="center" href="Login.php">Regresar a Login</a></h1>
 <?php
} 
else {
	echo "<h1 align = 'center'>No se logro guardar </h1>";
}

?>
