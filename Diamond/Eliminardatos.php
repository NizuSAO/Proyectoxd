<?php
	include('Eliminar.php')
  ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="..\Estilos\sao.css">
	<title>Eliminar datos</title>
</head>
<body>
<form method="post">
	<h1 style="color: #00FFDC">Eliminar Datos Sucursal 1</h1>
	<section class="form-register">
		<h2 style="color: #00FFDC">Delete</h2>
		<input class="controls" type="text" name="idproducto" placeholder="Ingrese la id del producto">
		<input class="botons" type="submit" name="Eliminar" value="Eliminar Datos"> 
		<p><a style="color: white;" href="mostrardatos.php">Ver Datos</a><p> 
	</section>
	</form>
</body>
</html>