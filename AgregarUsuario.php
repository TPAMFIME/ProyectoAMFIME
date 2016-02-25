<?php
require_once 'MenuUsuario.php';
session_start();
?>
<script src="jquery-2.1.4.min.js"> </script>
<script>
	
	function actualizar(){
    	var usuario = $('#usuario').val();
        var pwd = $('#pwd').val();
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var tel = $('#tel').val();
        var correo = $('#correo').val();
        var dir = $('#dir').val();
        var id = $('#editid').val();
        
    	$.post("ActualizarUsuario.php", {
        		id: id,
                usuario: usuario,
                pwd: pwd,
                nombre: nombre,
                apellido: apellido,
                tel: tel,
                correo: correo,
                dir: dir
            })
            .done(function (data) {
                $('#estatus').html(data);
            });
            
            cancelar();
    }
	
	function borrar(id) {
		$.post("DeleteUsuario.php", { id: id})
		.done (function (data) {
			$('#estatus').html(data);
			//alert("Data Loaded: " +data);
		});
	}
	
	function cancelar() {
		$('#usuario').val('');
		$('#pwd').val('');
		$('#nombre').val('');
		$('#apellido').val('');
		$('#tel').val('');
		$('#correo').val('');
		$('#dir').val('');
		$('#btnGuardar').show();
		$('#btnActualizar').hide();
		$('#btnCancelar').hide();
	}
	
	function editar(id,usuario,nombre,apellido,tel,correo,dir) {
		$('#usuario').val(usuario);
		$('#pwd').val('');
		$('#nombre').val(nombre);
		$('#apellido').val(apellido);
		$('#tel').val(tel);
		$('#correo').val(correo);
		$('#dir').val(dir);
		$('#editid').val(id);
		
		$('#btnGuardar').hide();
		$('#btnActualizar').show();
		$('#btnCancelar').show();
	}
	
	function guardar() {
		var usuario = $('#usuario').val();
		var pwd = $('#pwd').val();
		var nombre = $('#nombre').val();
		var apellido = $('#apellido').val();
		var tel = $('#tel').val();
		var correo = $('#correo').val();
		var dir= $('#dir').val();
				
		$.post("ValUsuario.php", { usuario: usuario, pwd:pwd, nombre: nombre,apellido:apellido,tel: tel, correo: correo, dir: dir })
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
	<link rel="stylesheet" type="text/css" href="FondoU.css"/>
<head>
	<title>GameLand - Agregar Usuarios</title>
</head>
	<h1 align="center">Registro</h1>
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
			<td> <input type="text" id="dir" name="dir" />
			<input type="hidden" id="editid" name="editid" /> </td>
		</tr>
		<tr>
		<td colspan="2" align="center"><button id = "btnGuardar" onclick="guardar()">Guardar</button> 
		<button id = "btnActualizar" style="display: none;" onclick="actualizar()">Actualizar</button>
		<button id = "btnCancelar" style = "display: none"  onclick="cancelar()">Cancelar</button> </td>
	</tr>
	</table>
	<div id = "estatus">
	<?php
		require_once 'RepUsuario.php'
	?>
</div>

