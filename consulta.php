<?php
	include 'conexion.php';
	$query= "select id,nombre,apaterno,amaterno,correoe from usuarios";
	$ejecucion= pg_query($con,$query);
	var_dump($ejecucion);
?>

<table>
<tr>
	<th>Id</th>
	<th>Nombre</th>
	<th>Apellido paterno</th>
	<th>Apellido materno</th>
	<th>Correo</th>
	<th>Edicion</th>
	<th>Eliminar</th>
</tr>

<?php
	/*while($row =  pg_fetch_row($ejecucion)){
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "</tr>";
	}*/
	while($row =  pg_fetch_assoc($ejecucion)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nombre']."</td>";
                echo "<td>".$row['apaterno']."</td>";
                echo "<td>".$row['amaterno']."</td>";
                echo "<td>".$row['correoe']."</td>";
                echo "<td><a href='formulario2.php?id=".$row['id']."'>Editar</a></td>";
                echo "<td><a href='formulario3.php?id=".$row['id']."'>Borrar</a></td>";
		echo "</tr>";
        }

?>

</table>

