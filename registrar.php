<?php
include("db.php");

if (isset($_POST['Registrar'])) {
	if (strlen($_POST['stock']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['idproducto']) >= 1 && strlen($_POST['nomproducto']) >= 1 && strlen($_POST['ventas']) >= 1 && strlen($_POST['ganancias']) >= 1) 
		{
			$stock = trim($_POST['stock']);
			$precio = trim($_POST['precio']);
			$idproducto =  trim($_POST['idproducto']);
			$nomproducto = trim($_POST['nomproducto']);
			$ventas = trim($_POST['ventas']);
			$ganancias = trim($_POST['ganancias']);
			$consulta = "INSERT INTO sucursal_1(`Stock`, `Precio`, `ID_producto`, `nom_producto`, `ventas`, `ganancias`) VALUES ('$stock','$precio','$idproducto','$nomproducto','$ventas','$ganancias')";
			$resultado = mysqli_query($conn,$consulta);
			if (!$resultado){
				die("error: ".mysqli_error($conn));
			} else {
				header("location: Diamond\mostrardatos.php");
			}
		}
}
?>