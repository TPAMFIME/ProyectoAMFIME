<?php
session_start();
	require_once 'Lib.php';
	$username = $_POST['username'];
	$pwd= $_POST['pwd'];
	$ul = array();
	$ul = checkCredsCliente($username, $pwd);
	if($ul == NULL){
		header("location:LogInError.php");
	} else {
		$id = checkId($username, $pwd);
		$_SESSION['ul'] = $ul;
		$_SESSION['id'] = $id;
		header("location:InicioCliente.php");
	}
?>