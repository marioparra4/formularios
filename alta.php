<?php
	//var_dump($_POST);
	$nombre= $_POST['nombre'];
	$apaterno= $_POST['apaterno'];
	$amaterno= $_POST['amaterno'];
	$correoe= $_POST['correoe'];

	echo "Hola " . $nombre . " " . $apaterno . " " . $amaterno;
	echo "<br/>";
	echo "Tu correo es: " . $correoe;
?>
