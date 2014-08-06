<?php 
	$BD="futbol";
	$BDUser="root";
	$BDPass="";
	$BDHost="localhost";
	if($enlace=@mysql_connect($BDHost,$BDUser,$BDPass)){}
	else
		alert("Error de conexión con la base de datos");
	if(mysql_select_db($BD)){}
	else
		alert("La base de datos no ha sido encontrada");

	function getCamposUsuarios(){
		return "IdUsuario,Nombre,Cuenta,Contrasena,Correo";
	}
 ?>
 