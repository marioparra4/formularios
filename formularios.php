<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<?php
		if(isset($_GET)){
			if($_GET['error'] == 1){
				echo "favor d corregir los datos del formulario";
			}
		}
	?>
	<body>
		<p>Por favor ingresa los siguientes datos:</p>
		<form name="alta" action="alta.php" method="post">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre"><br/>
			<label for="apaterno">Apellido paterno:</label>
			<input type="text" name="apaterno"><br/>
			<label for="amaterno">Apellido materno:</label>
			<input type="text" name="amaterno"><br/>
			<label for="correoe">Correo:</label>
			<input type="email" name="correoe"><br/>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
