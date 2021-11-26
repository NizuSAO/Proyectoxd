<?php  

require('conexion.php');

if (isset($_POST['Actualizar'])) {

$Stock = $_POST['stock'];
$Precio = $_POST['precio'];
$id = $_POST['idproducto'];
$Nomp = $_POST['nom_producto'];
$ventas = $_POST['ventas'];
$ganancias = $_POST['ganancias'];

$result=mysqli_query($conexion,"UPDATE `sucursal_1` SET `Stock`='$Stock' WHERE idproducto='$id'");
		if (!$result){
				die("error: ".mysqli_error($conexion));
			} else {
				header("location: verificaciondelete.html");
			}


}


?>