<?php

//Recibir usuario y contraseña para verificar
//
$usuario = strip_tags($_POST['usuario']);
$contrasena = strip_tags($_POST['contrasena']);
$miusuario="aguilar";
$micontrasena=hash("sha256","mipassword");

if($usuario == $miusuario && hash("sha256",$contrasena) == $micontrasena){
	echo "coinciden";
	session_start();
	$_SESSION['valida']=true;
	header('Location: menu.php');
}
else {
	header('Location: index.php?error=1');
}
?>

