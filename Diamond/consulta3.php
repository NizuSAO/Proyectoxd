<?php 
require('conexion.php');


$consulta = "SELECT * FROM sucursal_3";
$query = mysqli_query($conexion,$consulta);
$array = mysqli_fetch_array($query);


if (!$consulta){
				die("error: ".mysqli_error($conexion));
			} else {
				header("mostrardatos3.php");
			}



 ?>