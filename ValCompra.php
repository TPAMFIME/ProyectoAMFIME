
<?php
session_start();
require_once 'MenuPrincipal.php';
require_once 'Lib.php';

$datos = $_SESSION['carrito'] ;
$total1 = 0;
$total = 0;
	for($i=0;$i<count($datos);$i++){
					$subtotal = $datos[$i]['Cantidad']*$datos[$i]['Precio'];
					$total1 = $total1 + $subtotal;
	}
compra($_SESSION['ul']->id,$total1);

$compra_id = getCompraId($total1);
?>

<?php

echo "<table border = '1' align='center'>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<tr>";
echo "<td>Producto</td>";
echo "<td>Cantidad</td>";
echo "<td>Subtotal</td>";

echo "</tr>";
			for($i=0;$i<count($datos);$i++){
					$id = $datos[$i]['Id'];
					$nombre = $datos[$i]['Nombre'];
				 	$cantidad = $datos[$i]['Cantidad'];
					$subtotal = $datos[$i]['Cantidad']*$datos[$i]['Precio'];
					echo "<tr>";
					echo "<td>{$nombre}</td>";
					echo "<td>{$cantidad}</td>";
					echo "<td>{$subtotal}</td>";
					echo "</tr>";
					$total = $total + $subtotal;
					pedido($compra_id[0]->id,$id, $cantidad, $subtotal);
			}
echo "<tr>";
echo "<td>Total</td>";
echo "<td align = 'center' colspan = '2'>{$total}</td>";
echo "</tr>";
echo "</table>";

?>

<link rel="stylesheet" type="text/css" href="FondoRegistroc.css"/>
		
				