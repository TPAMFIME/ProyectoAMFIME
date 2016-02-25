<?php
session_start();
	require_once 'Lib.php';
	$username = $_POST['username'];
	$pwd= $_POST['pwd'];
	$ul = array();
	$ul = checkCredsUsuario($username, $pwd);
	if($ul == NULL){
		header("location:LogInError.php");
	} else {
		$id = checkId($username, $pwd);
		$_SESSION['ul'] = $ul;
		$_SESSION['id'] = $id;
		header("location:InicioUsuario.php");
	}
?>