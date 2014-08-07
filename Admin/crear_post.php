<!DOCTYPE html>
<html lang="en"/>
<head>
	<meta charset="UTF-8"/>
	<title>Post Creado</title>
</head>
<body>
	<?php 
		include("Funciones.php");
		include("nav.php");
		include("ConectarBD.php");
	 	
	 	if(isset($_POST["titulo"],$_POST["descripcion"],$_POST["contenido"]) and 
	 		($_POST["titulo"] and $_POST["descripcion"] and $_POST["contenido"])
	 		and is_uploaded_file($_FILES['img']['tmp_name'])){

	 	}else{
	 		$mesaje="No se ocmpleto correctamente el formulario";
	 	}
	 ?>
</body>
</html>