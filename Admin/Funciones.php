<?php
	function alert($a){
		echo '<script type="text/javascript">alert("'.$a.'")</script>';
	}

	//Tags
	function h1($a){
		return '<h1>'.$a.'</h1>';
	}
	function div($a){
		return '<div></div>';
	}

	//Diseño rapido
	function centrar($a){
		return '<div style:"text-align:center">'.$a.'</div>';
	}
 ?>