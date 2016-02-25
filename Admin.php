<?php
function getdb () {
	$servername = "localhost";
	$username = "root";
	$pwd = "";
	$db = "proyectofinal";
	$conn = new mysqli($servername, $username, $pwd);
	if($conn->connect_error) {
		echo "<h4 align = 'center'> Ocurrio un error de conexion </h4>";
	} 
	$dbconn = mysqli_select_db($conn, $db);
	return $conn;
}

?>