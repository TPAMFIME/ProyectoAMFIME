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
                <a href="InicioUsuario.php">Inicio</a>
            </li>
            <li>
                <a href="Inventario.php">Inventario</a>                
            </li>
            <li>
                <a href="Venta.php">Ventas</a>
            </li>
            <li>
                <a href="Entregas.php">Producto Recibido</a>
            </li>
            <li> 
                <a href="AgregarUsuario.php">Agregar Usuario</a>
            </li>    
             <li> 
                <a href="Cliente.php">Clientes</a>
            </li>        
            <li>
                <a href="Login.php">Cerrar sesion</a>
            </li>
        </ul>
        </div>
   </body>
</html>