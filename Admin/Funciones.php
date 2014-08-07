<?php
	session_start();

	//Constantes
	$dirImg="../Imagenes/";

	function alert($m){
		echo '<script type="text/javascript">alert("'.$m.'")</script>';
	}

	//Tags
	function h1($m){
		return '<h1>'.$m.'</h1>';
	}
	function div($m){
		return '<div>'.$m.'</div>';
	}
	function a($link, $m){
		return '<a href="'.$link.'">'.$m.'</a>';
	}

	//Diseño rapido
	function centrar($m){
		return '<div style:"text-align:center">'.$m.'</div>';
	}

	//Proceso de texto
	function espacioPorGuion(){
		($cadena){
		$patron[0]='/ /';
		$sust[0]="_";
		return preg_replace($patron, $sust, $cadena);
	}
	function SaltoPorBR($cadena){
		$patron[0]='/\n/';
		$sust[0]="<br/>";
		return preg_replace($patron, $sust, $cadena);
	}
	function cargarImg($img){
		global($dirImg);
		$nombre=espacioPorGuion($img['name']);
		$rutaImg=$dirImg.$nombre;
		$tipo=exif_imagetype($img['tmp_name']);
		if(is_file($rutaImg)){
			$nombre=time()."-".$nombre;
			$rutaImg=$dirIMG.$nombre;
		}
	// Continuar aquí--->
		if ((($tipoImagen==IMAGETYPE_JPEG) || ($tipoImagen==IMAGETYPE_PNG))&&($_FILES['img-principal']['size']<2097152)) {
		}else $error="Imagen no valida\n";
		echo $error;
		$nombreFicheroPag=$ttl.".php";
		$nombreFicheroPag=procesarEspacioPorGuion($nombreFicheroPag);
		$ubicacionPag="../pags/";
		$rutaPag=$ubicacionPag.$nombreFicheroPag;
		if (is_file($rutaPag)) {
			$nombreFicheroPag=time()."-".$nombreFicheroPag;
			$rutaPag=$ubicacionPag.$nombreFicheroPag;
		}
		if($error==null){
			if(move_uploaded_file($_FILES['img-principal']['tmp_name'],$rutaImg)){
				//Conectar con BD
				conectarBDAdmonCetis();
				$user=$_SESSION['user'];
				$sql="SELECT id_usuario FROM usuarios where nom_usuario='admin'";
				if($datos=mysql_query($sql)){
					while($d=mysql_fetch_array($datos)){
						$id=$d['id_usuario'];
					}
				}
	}
 ?>
