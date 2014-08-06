<!DOCTYPE html>
<html lang="es"/>
<head>
	<meta charset="UTF-8"/>
	<title>Creando Usuario</title>
</head>
<body>
	<?php 
		include("Funciones.php");
		include("ConectarBD.php");
		include("nav.php");

		if(isset($_POST["nombre"],$_POST["cuenta"],$_POST["contrasena"],$_POST["correo"]) 
			and $_POST["nombre"]!='' and $_POST["cuenta"]!=''and $_POST["contrasena"]!=''and $_POST["correo"]!=''){
		
			$nom=$_POST["nombre"];
			$cta=$_POST["cuenta"];
			$csa=$_POST["contrasena"];
			$crr=$_POST["correo"];

			$campos=getCamposUsuarios();
			$sql="INSERT INTO usuarios ($campos) VALUES (null,'$nom','$cta','$csa','$crr')";
			if(mysql_query($sql)){
				$mensaje="Su usuario se creo exitosamente";
			}else{
				$mensaje="No se pudo crear el usuario";
				$error=true;
			}
		}
		else {
			$mensaje="No ha completado el formulario correctamente";
			$error=true;
		}

		if(isset($error)and $error=true){
			alert($mensaje);
		}
	?>
	<h1 style="text-align: center"><?php echo $mensaje; ?></h1>
	<p style="text-align: center"><a href="index.php">Terminar</a></p>
</body>
</html>