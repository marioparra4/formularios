<html>
	<head>
		<meta charset="UTF-8">
		<h2>Bienvenido</h2>
	</head>

	<body>
		<?php
		if(isset($_GET['error']) && $_GET['error']== 1){
			echo "<p>Error al ingresar usuario y contaseña, faor de verificar</p>";
		}
		
		if(isset($_GET['error']) && $_GET['error']== 2){
			echo "<p>Error al ingresar usuario y contaseña, faor de verificar</p>";
		}
		?>
		<p>Ingresa tu nombre de usuario y contraseña"</p>
		<form name="login" action="login.php" method="post">
			<label for="usuario">Nombre de usuario:</label>
			<input type="text" id="usuario" name="usuario">
			<br/>
			<label for="contrasena">Contraseña:</label>
			<input type="password" id="contrasena" name="contrasena">
			<br/>
			<input type="submit" name="Enviar" value="Enviar">
		</form>
	</body>
</html>
