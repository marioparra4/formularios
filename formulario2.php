<?php
	include 'conexion.php';
	$id = $_GET['id'];
	$query= "select nombre, apaterno, amaterno, correoe from usuarios where id=".$id;
	$ejecucion= pg_query($con,$query);
	$resultado= pg_fetch_assoc($ejecucion);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<p>Por favor ingresa los siguientes datos:</p>
		<form name="alta" action="editar.php" method="post">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre']; ?>"><br/>
			<label for="apaterno">Apellido paterno:</label>
			<input type="text" name="apaterno" value="<?php echo $resultado['apaterno']; ?>"><br/>
			<label for="amaterno">Apellido materno:</label>
			<input type="text" name="amaterno" value="<?php echo $resultado['amaterno']; ?>"><br/>
			<label for="correoe">Correo:</label>
			<input type="email" name="correoe" value="<?php echo $resultado['correoe']; ?>"><br/>
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
