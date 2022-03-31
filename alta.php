<?php
	//var_dump($_POST);
	include 'conexion.php';
	
	$nombre= strip_tags($_POST["nombre"]);
	$apaterno= strip_tags(_POST["apaterno"]);
	$amaterno= strip_tags($_POST["amaterno"]);
	$correoe= strip_tags($_POST["correoe"]);
//validacion
	if(preg_match('/[A-Za-z áéíóúñ]{2,50}/ig', $nombre)){
		echo "Es un nombre valido";
	}
	else {
		echo "Esto no es un nombre valido";
		header('Location: formularios.php?error=1');
	}	
	if(filter_var($correoe, FILTER_VALIDATE_EMAIL)){
		echo "esto es un correo";
	}
	else {
		echo "esto no es un correo valido";
		header('Location: formularios.php?error=1');
	}
	$insercion= "insert into usuarios (nombre,apaterno,amaterno,correoe) values('$nombre','$apaterno','$amaterno','$correoe')";
	$query = pg_query($con,$insercion);
	if($query){
		echo "Se guardo en la base de datos";
		echo "<br/>";
		echo "<a href=formularios.html>Regresar al formulario</a>";
	} else {
		echo "Hubo un error";
	}
	
	//var_dump($query);
	pg_close($con);
/*
	echo "Hola " . $nombre . " " . $apaterno . " " . $amaterno;
	echo "<br/>";
	echo "Tu correo es: " . $correoe;
*/
?>
