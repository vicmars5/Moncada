<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
</head>
<body>
	<?php
	include("Funciones.php");
	include("ConectarBD.php");
	include("nav.php");

	if(isset($_SESSION["activo"])){
		$sql="SELECT Nombre, Cuenta FROM Usuarios";
		if($datos=mysql_query($sql)){
			$tabla=null;
			while($fila=mysql_fetch_array($datos)){
				$nombre=$fila["Nombre"];
				$cuenta=$fila["Cuenta"];
				$tabla=$tabla.'
		<tr>
	 		<td>'.$nombre.'</td>
	 		<td>'.$cuenta.'</td>
	 		<td><a href="eliminar_usuario.php?cuenta='.$cuenta.'">Eliminar</a></td>
	 	</tr>';
			}
		}else{
			$mensaje="Error de conexion con la base de datos";
		}
	}
	if(isset($tabla)){
		echo "
	<table>
		<tr>
	 		<td>Nombre</td>
	 		<td>Nombre de Usuario</td>
	 		<td>Acción</td>
	 	</tr>
	 	$tabla
	</table>";
	}else{
		alert($mensaje);
	}
	 ?>
</body>
</html>