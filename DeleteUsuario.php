<?php

require_once 'Lib.php';

$id = $_POST['id'];

if(borrarUser($id)) {
	}
else {
	echo "<h1 align = 'center'>No se logro borrar </h1>";
}

require_once 'RepUsuario.php';

?>