<!DOCTYPE html>
<html lang="es"/>
<head>
	<meta charset="UTF-8"/>
	<title>Eliminando Usuario</title>
</head>
<body>
	<?php 
	include("Funciones.php");
	include("nav.php");
	include("ConectarBD.php");

	if(isset($_SESSION["activo"],$_GET["cuenta"])){
		$sql="DELETE FROM Usuarios WHERE Cuenta='".$_GET["cuenta"]."'";
		if(mysql_query($sql)){
			$mensaje="Usuario eliminado";
		}else{
			$mensaje="Error de conexión con la base de datos";
			alert($mensaje." ".$sql);
		}
	}else{
		$mensaje="Usted no puede realizar esta acción";
		alert($mensaje);
	}
	echo centrar(h1($mensaje));
	echo centrar(a("index.php","Terminar"));

 ?>
</body>
</html>