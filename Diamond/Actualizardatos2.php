<?php
	include('Actualizar2.php')
  ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="..\Estilos\sao.css">
	<title>Actualizar</title>
</head>
<body>
<form method="post">
	<h1 style="color: #00FFDC">Modificar Datos Sucursal 2</h1>
	<section class="form-register">
		<h2 style="color: #00FFDC">Modified</h2>
		<input class="controls" type="text" name="stock" placeholder="Ingrese si hay stock o no">
		<input class="controls" type="text" name="precio" placeholder="Ingresar el precio">
		<input class="controls" type="text" name="idproducto" placeholder="ingresar la id del producto">
		<input class="controls" type="text" name="nomproducto" placeholder="ingresar el nombre del producto">
		<input class="controls" type="text" name="ventas" placeholder="ingresar la cantidad de ventas">
		<input class="controls" type="text" name="ganancias" placeholder="ingresar las ganancias">
		<input class="botons" type="submit" name="Actualizar" value="Actualizar Datos">
		<p><a style="color: black;" href="mostrardatos2.php">Ver Datos</a><p> 
	</section>
	</form>
</body>
</html>