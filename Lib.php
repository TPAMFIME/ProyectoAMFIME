<?php
require_once 'Admin.php';

function pedido($compra_id, $prod_id, $cant, $precio){
		$sql = "INSERT INTO pedido
				(id,compra_id,prod_id,cant,precio)
				VALUES (NULL,'{$compra_id}','{$prod_id}',{$cant},{$precio})";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function compra($id,$total){
	$actual = time();
	$sql = "INSERT INTO compra
				(id,fecha,cliente_id,total)
				VALUES (NULL,{$actual},'{$id}',{$total})";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function getCompraId($total){
	$query = "SELECT id FROM compra WHERE total = {$total}";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function getCliente() {
	
	$query = "SELECT id, username, nombre, apellido, tel, dir, correo, since FROM cliente ORDER BY id DESC";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$a->since = gmdate("M d y H:i:s",$a->since);	
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function getVenta() {
	$query = "SELECT a.id,a.fecha,b.nombre,b.apellido,c.nombre AS producto ,d.cant,d.precio
	FROM compra AS a
	LEFT JOIN cliente AS b ON a.cliente_id = b.id
	LEFT JOIN pedido AS d ON d.compra_id = a.id
	LEFT JOIN producto AS c ON c.id = d.prod_id  
    ORDER BY id DESC";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$a->fecha = gmdate("M d y H:i:s",$a->fecha);	
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;

}

function getCompra() {
	
	$query = "SELECT * FROM compra ORDER BY id DESC";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function getCantidad($id,$cant2) {
	
	$query = "SELECT cant FROM inventario WHERE prod_id = '{$id}'";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	$p = $dataset;
	foreach ($p as $key  => $val) {
	$cant = $val->cant;
	}
	$cant = $cant +$cant2;
	$query  ="UPDATE inventario set cant = {$cant} WHERE prod_id = '{$id}'";
	mysqli_query($conn, $query);
	mysqli_close($conn);
	return $dataset;
}

function checkId($username, $pwd){
	$pwd = md5($pwd);	
	$query = " SELECT id FROM usuario
	WHERE username = '{$username}' AND pwd = '{$pwd}'";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = null;
	while ($a = mysqli_fetch_object($result) ) {
		$dataset = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function updateUser($id, $username, $pwd, $nombre, $apellido, $tel, $correo, $dir){
   	$pwd = md5($pwd);
 	$sql = "UPDATE usuario SET username = '{$username}', pwd = '{$pwd}',  nombre = '{$nombre}', apellido = '{$apellido}', 
 	tel = '{$tel}', correo = '{$correo}', dir = '{$dir}'  WHERE id = '{$id}' ";
	$conn = getdb();
	$result;
	if ($conn -> query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
 	return $result;
 }

function actualizaCantidad($cant,$id) {
	
	$query = "UPDATE inventario set cant = '{$cant}' WHERE prod_id = {$id}";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function guardaEntrega($proveedor_id,$usuario_id,$prod_id,$cant) {
	$fecha = time();
	$sql = "INSERT INTO proveedor_cant
				(id,proveedor,usuario_id,prod_id,cant,fecha)
				VALUES (NULL,'{$proveedor_id}','{$usuario_id}','{$prod_id}',{$cant},{$fecha})";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function getUser() {
	
	$query = "SELECT id, username, nombre, apellido, tel, correo, dir FROM usuario ORDER BY id DESC";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function borrarCliente($id) {
	$sql = "DELETE FROM cliente WHERE id = '{$id}'";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function borrarCompra($id) {
	$sql = "DELETE FROM compra WHERE id = '{$id}'";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function borrarUser($id) {
	$sql = "DELETE FROM usuario WHERE id = '{$id}'";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function borrarProducto1($id) {
	$sql = "DELETE FROM producto WHERE id = '{$id}'";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}
function borrarProducto2($id) {
	$sql = "DELETE FROM  inventario WHERE prod_id = '{$id}'";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}


function agregarCliente($usuario,$pwd,$nombre,$apellido, $tel, $correo,$dir ) {
	$actual = time();
	$pwd = md5($pwd);	
	$sql = " INSERT INTO cliente 
				(id, username, pwd, nombre, apellido, tel,  correo,dir, since)
				VALUES (NULL, '{$usuario}','{$pwd}','{$nombre}','{$apellido}', '{$tel}', '{$correo}', '{$dir}', '{$actual}')";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}


function agregarCompra($usuario, $cliente) {
	$actual = time();	
	$sql = " INSERT INTO compra 
				(id, fecha, usuario_id, cliente_id)
				VALUES (NULL, '{$actual}', '{$usuario}', '{$cliente}')";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}


function agregarUser($username, $pwd, $nombre, $apellido, $tel, $correo, $dir) {
	$pwd = md5($pwd);	
	$sql = " INSERT INTO usuario 
				(id, username, pwd, nombre,apellido, tel, correo, dir)
				VALUES (NULL, '{$username}','{$pwd}','{$nombre}','{$apellido}', '{$tel}','{$correo}','{$dir}')";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function agregarProducto($nombre, $descripcion,$precio,$anio,$imagen) {	
	$sql = " INSERT INTO producto 
				(id, nombre, descripcion,precio,anio,imagen)
				VALUES (NULL,'{$nombre}','{$descripcion}','{$precio}','{$anio}','{$imagen}')"	;
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

function rellenarProducto($nombre,$precio) {
	$query = " SELECT id FROM producto 
	WHERE nombre = '{$nombre}' AND precio = '{$precio}'";
	$conn = getdb();
	$id = mysqli_query($conn, $query);
	$dataset = null;
	while ($a = mysqli_fetch_object($id) ) {
		$dataset = $a;
	}
	$sql = "INSERT INTO inventario
			(id,prod_id,cant)
			VALUE(NULL,{$dataset->id},0)";
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	mysqli_close($conn);
	return $result;
}


function checkCredsUsuario($username, $pwd){
	$pwd = md5($pwd);	
	$query = " SELECT id, username, nombre, apellido, tel, correo, dir  
	FROM usuario 
	WHERE username = '{$username}' AND pwd = '{$pwd}'";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = null;
	while ($a = mysqli_fetch_object($result) ) {
		$dataset = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function checkCredsCliente($username, $pwd){
	$pwd = md5($pwd);	
	$query = " SELECT id, username, nombre, apellido, tel, correo, dir  
	FROM cliente 
	WHERE username = '{$username}' AND pwd = '{$pwd}'";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = null;
	while ($a = mysqli_fetch_object($result) ) {
		$dataset = $a;
	}
	mysqli_close($conn);
	return $dataset;
}



function getProducto() {
	
	$query = "SELECT u.id,u.nombre,u.descripcion,u.precio,u.anio,i.cant
	FROM producto AS u
	LEFT join inventario AS i on u.id = i.prod_id 
    ORDER BY id DESC";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function getXbox() {
	$query = "SELECT nombre, precio FROM producto WHERE descripcion = 'Xbox'";
	$conn = getdb();
	$result = mysqli_query($conn, $query);
	$dataset = Array();
	while ($a = mysqli_fetch_object($result) ) {
		$dataset[] = $a;
	}
	mysqli_close($conn);
	return $dataset;
}

function agregarcarrito($prod_id, $cant, $precio) {
	$fecha = time();
	$sql = " INSERT INTO pedido 
				(id, compra_id,prod_id, cant, precio,fecha)
				VALUES (NULL, '1','{$id}','{$cant}','{$precio}', '{$fecha}'";
	$conn = getdb();
	$result;
	if($conn->query($sql) === TRUE) {
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

?>