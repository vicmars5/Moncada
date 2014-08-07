<!DOCTYPE html>
<html lang="es"/>
<head>
	<meta charset="UTF-8">
	<title>Nuevo Post</title>
</head>
<body>
<?php 
	include("Funciones.php");
	include("nav.php");
	include("ConectarBD.php");

	if(isset($_SESSION["activo"])){
		echo '
	<form action="crear_post.php" method="_POST" enctype="multipart/form-data">
		<div><label for="titulo">Titulo<input type="text" name="titulo"></label></div>
		<div><label for="descripcion">Descripcion<input type="text" name="descripcion"></label></div>
		<div><label for="img">Imagen<input type="file" name="img"></label></div>
		<div><label for="Contenido">Contenido<textarea name="Contenido" id="" cols="30" rows="10"></textarea></label></div>
		
	</form>';
	}

 ?>

</body>
</html>