<?php
require_once 'Lib.php';

$id = $_POST["id"];
$usuario = $_POST["usuario"];
$pwd = $_POST["pwd"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tel = $_POST["tel"];
$correo = $_POST["correo"];
$dir = $_POST["dir"];




if (updateUser($id, $usuario, $pwd, $nombre, $apellido,
 $tel, $correo, $dir)) {
}else{
	echo "No se ha guardado";
}

require_once 'RepUsuario.php';
?>