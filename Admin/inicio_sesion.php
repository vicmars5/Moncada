<!DOCTYPE html>
<html lang="es"/>
<head>
	<meta charset="UTF-8"/>
	<title>Inicio de sesión</title>
</head>
<body>
	<?php 
	include("Funciones.php");
	include("nav.php");

	 ?>
	<div>
		<form action="iniciar_sesion.php" method="post">
			<label for="usuario">Usuario<input type="text" name="usuario"></label>
			<label for="contrasena">Contraseña<input type="password" name="contrasena"></label>
			<input type="submit" value="Siguiente"/>
		</form>
	</div>
</body>
</html>