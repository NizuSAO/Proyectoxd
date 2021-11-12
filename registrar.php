<?php
include("db.php");

if (isset($_POST['Registrar'])) {
	if (strlen($_POST['nombres']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['correo']) >= 1) 
		{
			$name = trim($_POST['nombres']);
			$contraseña = trim($_POST['contraseña']);
			$email =  trim($_POST['correo']);
			$fecha = trim($_POST['fecha']);
			$consulta = "INSERT INTO users(`id_usuario`, `contraseña`, `email`, `fecha_registro`) VALUES ('$name','$contraseña','$email','$fecha')";
			$resultado = mysqli_query($conn,$consulta);
			if (!$resultado){
				die("error: ".mysqli_error($conn));
			} else {
				header("location: cuentalogeada.html");
			}
		}
}
?>