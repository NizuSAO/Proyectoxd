<?php 
require('conexion.php');

if (isset($_POST['Eliminar'])) {

$id = $_POST['idproducto'];

$resul=mysqli_query($conexion,"DELETE FROM sucursal_1 WHERE ID_producto='$id'");
		if (!$resul){
				die("error: ".mysqli_error($conexion));
			} else {
				header("location: verificaciondelete.html");
			}


}

 ?>