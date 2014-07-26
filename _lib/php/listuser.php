
	
<?php 
include("conector.php");

	@$query = mysqli_query(@$conexion, "select * from usuario");
	
	echo "<div class='buscar' ><table>
					 <tr class='titulo' ><td>Id Cliente</td><td>Usuario</td><td>Clave</td><td>Nombre</td><td>Permiso</td><td>Activo</td></tr>";	
					 
	while(@$row = mysqli_fetch_array($query)){

		echo "<tr class='show'>";
		echo "<td>".@$row[id]."</td>";
		echo "<td>".@$row[usuario]."</td>";
		echo "<td>".@$row[clave]."</td>";
		echo "<td>".@$row[nombre]."</td>";
		echo "<td>".@$row[permiso]."</td>";
		echo "<td>".@$row[activo]."</td>";
		echo "</tr>";	
		
	} 
echo   "</table></div>";	    
    
   	@$conexion->close();	
	
    ?>
