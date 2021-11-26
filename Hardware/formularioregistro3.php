<?php
	include('registrar3.php') 
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="Estilos\sao.css">
	<title>Hardware Machine</title>
</head>
<body>
	<form method="post">
	<h1 style="color: #00FFDC">Listar los datos de la Sucursal 3</h1>
	<section class="form-register">
		<h3 style="color: #00FFDC">Registro de ventas</h3>
		<input class="controls" type="text" name="stock" placeholder="Ingrese si hay stock">
		<input class="controls" type="text" name="precio" placeholder="ingresar precio del producto">
		<input class="controls" type="text" name="idproducto" placeholder="ingresar la id del producto">
		<input class="controls" type="text" name="nomproducto" placeholder="ingresar el nombre del producto">
		<input class="controls" type="text" name="ventas" placeholder="ingresar la cantidad de ventas">
		<input class="controls" type="text" name="ganancias" placeholder="ingresar las ganancias">
		<input class="botons" type="submit" name="Registrar"> 
		<p><a style="color: black;" href="Diamond\mostrardatos3.php">Mostrar Datos</a><p>
		<p><a style="color: black;" href="HardwareMachines.html">Inicio</a><p>
	</section>
	</form>

	

</body>
</html>