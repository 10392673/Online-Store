<script type="text/javascript" language="javascript" src="_lib/js/config.js"></script>
	
<?php 
include("conector.php");

	@$query = mysqli_query(@$conexion, "select * from usuario");
	
	echo "<div class='buscar' ><table>
					 <tr class='titulo' ><td class='pq' >Id usuario</td><td class='pq2' >Nombre</td><td class='pq'>Permiso</td><td class='pq' >Activo</td><td class='pq2' >Editar</td></tr>";	
					 
	while(@$row = mysqli_fetch_array($query)){

		echo "<tr class='show'>";
		echo "<td class='pq' >".@$row[id]."</td>";
		echo "<td class='pq2' >".@$row[nombre]."</td>";
		echo "<td class='pq'>".@$row[permiso]."</td>";
		echo "<td class='pq' >".@$row[activo]."</td>";
		echo "<td class='pq2' >"."<a href='javascript:void(0);'>Eliminar</a>"."<a href='javascript:void(0);'>Actualizar</a>"."<a id='adduser' href='javascript:void(0);'>Agregar</a>"."</td>";
		echo "</tr>";	
		
	} 
echo   "</table></div>";	    
    
   	@$conexion->close();	
	
    ?>
