<script src="jquery-2.1.4.min.js"></script>
<script>
function guardar() {
		var usuario = $('#usuario').val();
		var pwd = $('#pwd').val();
		var nombre = $('#nombre').val();
		var apellido = $('#apellido').val();
		var tel = $('#tel').val();
		var correo = $('#correo').val();
		var dir= $('#dir').val();
				
		$.post("ValCliente.php", { usuario: usuario, pwd:pwd, nombre: nombre,apellido:apellido,tel: tel, correo: correo, dir: dir })
		.done (function (data) {
			$('#estatus').html(data);
		});
		
		var usuario = $('#usuario').val('');
		var pwd = $('#pwd').val('');
		var nombre = $('#nombre').val('');
		var apellido = $('#apellido').val('');
		var tel = $('#tel').val('');
		var correo = $('#correo').val('');
		var dir= $('#dir').val('');
	}
</script>
<body alink="black" vlink="black" link="black">
	<link rel="stylesheet" type="text/css" href="FondoRegistroc.css"/>
<h1 align="center">Registrar como Cliente</h1>
	<table border="1" align="center">
		<tr>
			<td>Usuario</td>
			<td><input type="text" id="usuario" name="usuario"></td>
		</tr>
		<tr>
			<td>Contraseña</td>
			<td><input type="password" id="pwd" name="pwd"</td>
		</tr>
		
		<tr>
			<td>Nombre</td>
			<td><input type="text" id="nombre" name="nombre"</td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input type="text" id="apellido" name="apellido"</td>
		</tr>
		<tr>
			<td>Telefono</td>
			<td><input type="text" id="tel" name="tel"</td>
		</tr>
		<tr>
			<td>Corrreo electronico</td>
			<td><input type="text" id="correo" name="correo"</td>
		</tr>
		
		<tr>
			<td>Direccion</td>
			<td><input type="text" id="dir" name="dir"</td>
		</tr>
		<tr>
		<td colspan="2" align="center"><button id = "btnGuardar" onclick="guardar()">Registrar</button> <button><a href="Login.php">Volver a LogIn</a></button></td>
			</tr>
	</table>
	<div id = "estatus"></div>
</body>
	