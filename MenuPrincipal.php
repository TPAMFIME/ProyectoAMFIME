<?php 
include 'conexion.php';
                	$re=mysql_query("select * from producto where descripcion = 'PlayStation'")or die(mysql_error());
					$f=mysql_fetch_array($re)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <script type="text/javascript" src="jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="jquery.fixedMenu.js"></script>
        <link rel="stylesheet" type="text/css" href="fixedMenu_style2.css" />
        <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>
    </head>
    <body>
    <div class="menu">
        <ul>
            <li>
                <a href="Inicio.php">Inicio</a>
            </li>
            <li>
                <a href="#">Productos<span class="arrow"></span></a>
                <ul>
                    <li><a href="Productos.php?descripcion=PlayStation">Playstation</a></li>
                    <li><a href="Productos.php?descripcion=Nintendo">Nintendo</a></li>
                    <li><a href="Productos.php?descripcion=Xbox">Xbox</a></li>
                    <li><a href="Productos.php?descripcion=Pc">PC</a></li>
                </ul>
            </li>
            <li>
                <a href="Contacto.php">Contactanos</a>
                
            </li>
            <li>
                <a href="CarritodeCompras.php">Carrito de Compras</a>
            </li>
            <li>
                <a href="Login.php">Cerrar Sesion</a>
                </li>
        </ul>
        </div>
   </body>
</html>