<?php
	session_start();
    unset($_SESSION['carrito']);
	header('location:Inicio.php');
?>