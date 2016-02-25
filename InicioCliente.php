<?php
session_start();


require_once 'MenuPrincipal.php'; 
require_once 'Carrusel.php';
?>

<html>
<head>
<title>GameLand - Inicio</title>
</head>
<body>
	<script type="text/javascript">
  $(document).ready(function() {
    $('#coin-slider').coinslider({hoverPause: true, effect: 'random', width: 1370, height: 580, delay: 3000});
  });
</script>
</body>
 </html>
