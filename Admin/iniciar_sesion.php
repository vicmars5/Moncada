<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesion</title>
</head>
<body>
	<?php 
	include("Funciones.php");
	include("nav.php");
	include("ConectarBD.php");

	if(isset($_POST["usuario"],$_POST["contrasena"])){
		$sql="SELECT * FROM usuarios WHERE Cuenta='".$_POST["usuario"]."' AND Contrasena='".$_POST["contrasena"]."' ";
		if($datos=mysql_query($sql)){
			if(mysql_num_rows($datos)){
				while($priv=mysql_fetch_array($datos)){
					$mensaje="Ha iniciado sesion correctamente";
					$_SESSION["activo"]=true;
				}
			}else{
				$mensaje="El usuario o la contraseña son incorrectos";
			}
		}else{
			$mensaje="Error de conexión con la BD";
		}
	}else{
		$mensaje="Por favor ingrese el nombre de usuario y/o contraseña";
	}
	echo centrar(h1($mensaje));
	echo centrar(a("index.php","Siguiente"));
	 ?>
	
	
</body>
</html>