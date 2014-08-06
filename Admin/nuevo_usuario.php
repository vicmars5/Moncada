<!DOCTYPE html>
<html lang="es"/>
<head>
	<meta charset="UTF-8"/>
	<title>Nuevo Usuario</title>
</head>
<body>
	<?php include("nav.php"); ?>
	<br>
	<br>
	<br>
	<div>
		<form action="crear_usuario.php" method="post" enctype="multipart/form-data">
			<div>
				<label for="nombre">Nombre<input type="text" name="nombre"/></label>
			</div>
			<div><label for="cuenta">Nombre de usuario<input type="text" name="cuenta"/></label></div>
			<div><label for="contrasena">Contraseña<input type="password" name="contrasena"/></label></div>
			<div><label for="correo">Correo Electronico<input type="email" name="correo"/></label></div>
			<br>
			<input type="submit" value="Crear usuario"/>
		</form>
	</div>
</body>
</html>