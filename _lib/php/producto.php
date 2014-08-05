<script type="text/javascript" language="javascript" src="_lib/js/config.js"></script>
	
<?php 
include("conector.php");

	@$query = mysqli_query(@$conexion, "select * from producto");
	
	echo "<div class='buscar' ><table>
					 <tr class='titulo' ><td class='pq2' >Producto</td><td class='pq'>Precio</td><td class='pq' >Cantidad</td><td class='pq' >Imagen</td><td class='pq' >Categoria</td><td class='pq2' >Editar</td></tr>";	
					 
	while(@$row = mysqli_fetch_array($query)){

		echo "<tr class='show'>";
		echo "<td class='pq' >".@$row[nombre]."</td>";
		echo "<td class='pq2' >".@$row[precio]."</td>";
		echo "<td class='pq'>".@$row[cantidad]."</td>";
		echo "<td class='pq' ><img src='$row[imagen]' alt='Producto en venta' title='Producto en venta' /></td>";
		echo "<td class='pq' >".@$row[id_categoria]."</td>";
		echo "<td class='pq2' >"."<a href='javascript:void(0);'>Eliminar</a>"."<a href='javascript:void(0);'>Actualizar</a>"."<a id='adduser' href='javascript:void(0);'>Agregar</a>"."</td>";
		echo "</tr>";	
		
	} 
echo   "</table></div>";	    
    
   	@$conexion->close();	
	
    ?>
