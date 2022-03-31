<?php
session_start();
//verificar si exite una sesion
if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
?>
<html>
<head>
<meta charset="UTF-8">
Menu principal
</head>
<body>
<p>Esto debe verse solo si el usuario y la contraseña son validos y se inciio una sesion</p>
</body>
<form name="salir" action="salida.php" mehod="post">
	<input type="Submit" name="salir" value="salir">
</form>
</html>



<?php
} else {
	header('Location: index.php?error=2');
}

?>
