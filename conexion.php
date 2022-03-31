<?php
	//conexion al manjador y bd
	echo "intentando conexion";
	$con = pg_connect("dbname=formulario user=usuario1 password=hola123 port=5432") or die (pg_last_error());
	var_dump($con);
?>
