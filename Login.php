<?php 
session_start();
session_destroy();
?>
<html>
	<link rel="stylesheet" type="text/css" href="FondoLogin.css"/>
<head>
	<title>GameLand - Iniciar Sesion</title>
</head>
<body alink="black" vlink="black" link="black">
	<marquee bgcolor="Black"><font size="20" color="white">Bienvenido a GameLand</font></marquee>
<form action="LoginValidateUsuario.php" method="POST">
	
	<h1 align="center">Ingresar como usuario</h1>
	
	<table border="1" align="center">
		<tr>
			<td>Nombre de usuario</td>
			<td><input type="text" id="username" name="username" </td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td><input type="password" id="pwd" name="pwd"</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input  type="submit" value="Ingresar"></td>
				
			</tr>
	</table>
</form>

<br><br>

<form action="LogInValidateCliente.php" method="post">	
	
	<h1 align="center">Ingresar como cliente</h1>
	
	<table border="1" align="center">
		<tr>
			<td>Nombre de usuario</td>
			<td><input type="text" id="username" name="username" </td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td><input type="password" id="pwd" name="pwd"</td>
			</tr>
			<tr>
				<td align="center"><input  type="submit" value="Ingresar"></td>				
				<td align="center"><button><a href="AgregarCliente.php">No Tengo Cuenta</a></button></td>
			</tr>
	</table>
</form> 
</body>
</html>
