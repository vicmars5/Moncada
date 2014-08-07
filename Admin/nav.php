<?php 

echo '	<nav>
		<ul>
			<li><a href="nuevo_post.php">Nuevo Post</a></li>
			<li><a href="ver_posts.php">Posts</a></li>
			<li><a href="nuevo_usuario.php">Nuevo Usuario</a></li>
			<li><a href="ver_usuarios.php">Usuarios</a></li>
		</ul>';
//Si no ha iniciado sesión
if(isset($_SESSION["activo"])==false){echo "<a href='inicio_sesion.php'>Iniciar Sesion</a>";}
	else{echo '<a href="cerrar_sesion.php">Cerrar Sesión</a>';}

echo '	</nav>';
?>