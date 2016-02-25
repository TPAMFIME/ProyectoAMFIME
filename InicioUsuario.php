<?php
session_start();
	require_once 'MenuUsuario.php';
	$id = $_SESSION['id'];
?>
	

<html>
	<link rel="stylesheet" type="text/css" href="InicioUsuario.css" />
	<head>
		<title>GameLand - Usuario</title>
	</head>
	<body>
		<table rules = "all" border = "1"align = "left">
			<tr align="center">
				<td colspan="2">Limpieza</td>
			</tr>
			<tr align="center">
				<td>Lunes</td>
				<td>Joel</td>
			</tr>
			<tr align="center">
				<td>Martes</td>
				<td>Lesslie</td>
				
			</tr>
			<tr align="center">
				<td>Miercoles</td>
				<td>Eduardo</td>
			</tr>
			<tr align="center">
				<td>Jueves</td>
				<td>Vanessa</td>
			</tr>
			<tr align="center">
				<td>Viernes</td>
				<td>Andre</td>
			</tr>
			<tr align="center">
				<td>Sabado</td>
				<td>Miguel</td>
			</tr>
			<tr align="center">
				<td>Domingo</td>
				<td>Valeria</td>				
			</tr>
		</table>
		<table  rules = "all" align = "right" border = "1">
			<tr align="center">
				<td><h2>Consejos para una buena venta</h2></td>
			</tr>
			<tr align="left">
				<td>1.- Sea amable con el cliente</td>
			</tr>
			<tr align="left">
				<td>2.- Respete el espacio personal del cliente</td>
			</tr>
			<tr align="left">
				<td>3.- Mantenga una sonrisa</td>
			</tr>
			<tr align="left">
				<td>4.- Evite el uso del lenguaje vulgar</td>
			</tr>
			<tr align="left">
				<td>5.- No juzge al cliente por su apariencia</td>
			</tr>
			<tr align="left">
				<td>6.- Evite interrumpir al cliente</td>
			</tr>
			<tr align="left">
				<td>7.- No olvides entregarle al cliente su ticket de compra</td>
			</tr>
			<tr align="left">
				<td>8.- Invite a regresar al cliente</td>
			</tr>
			<tr align="left">
				<td>9.- Se servicial</td>
			</tr>
			<tr align="left">
				<td>10.- Invita al cliente a probar productos nuevos</td>
			</tr>
		</table>
		<table align = "center">
			<tr>
				<td><h1>GRACIAS POR SU 100! <3 :)</h1></td>
			</tr>
		</table>
	</body>
</html>