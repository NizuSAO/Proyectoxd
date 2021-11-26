<?php 
require('consulta.php');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Consultar Datos</title>
 	<link rel="stylesheet" href="..\Estilos\nau.css">

 </head>
 <body>

 	<nav style="background-color:#00796b">
		<center>
			<h1>Listado de Datos</h1>
		</center>	
	</nav>

	<center>
		<table border="10">
			<thead>
				<tr>
					<th>Stock</th>
					<th>Precio</th>
					<th>ID</th>
					<th>Producto</th>
					<th>Ventas</th>
					<th>Ganancias</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach ($query as $row){ ?>
				<tr>
					<td><?php echo $row['Stock']; ?></td>
					<td><?php echo $row['Precio']; ?></td>
					<td><?php echo $row['ID_producto']; ?></td>
					<td><?php echo $row['nom_producto']; ?></td>
					<td><?php echo $row['ventas']; ?></td>
					<td><?php echo $row['ganancias']; ?></td>
					<td><p><a style="color: black;" href="Eliminardatos.php">Eliminar</a><p></td>
</tr>
				</tr>


				<?php/*
      include "conexion.php";
      $sentencia="SELECT * FROM sucursal_1";
      $resultado=mysqli_query($sentencia);
      while($filas=mysqli_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['no']; echo "</td>";
          echo "<td>"; echo $filas['Stock']; echo "</td>";
          echo "<td>"; echo $filas['Precio']; echo "</td>";
          echo "<td>"; echo $filas['ID_producto']; echo "</td>";
		  echo "<td>"; echo $filas['nom_producto']; echo "</td>";
          echo "<td>"; echo $filas['ventas']; echo "</td>";
          echo "<td>"; echo $filas['ganancias']; echo "</td>";

          echo "<td> <a href='eliminar.php?no=".$filas['no']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

	  */?>
			</tbody>
			<?php  
			}
			?>

		</table>

		<footer>
			<center>
				<h1><a href="../formularioregistro.php">volver a ingresar datos</a></h1>
			</center>
		</footer>
	</center>


 </body>
 </html>