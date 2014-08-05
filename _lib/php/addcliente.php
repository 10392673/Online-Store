  <script type="text/javascript" language="javascript" src="_lib/js/config.js"></script>
	<?php 
		include("conector.php");
		
		if($_POST) 
		{
		
		$nombre = $_POST['nombre']; 
		$direccion = $_POST['direccion']; 
		$telefono = $_POST['telefono'];
		$id_usuario = $_POST['id_usuario'];
	}
	
		@$query = mysqli_query(@$conexion, "INSERT INTO cliente (nombre, direccion, telefono, id_usuario) VALUES ('$nombre','$direccion','$telefono', '$id_usuario')" ); 
	
	 ?>	
	 
	<div class="agreg" >
		 <form action="_lib/php/addcliente.php" method="post" >
			<label>Nombre</label>
			<input type="text" name="nombre" />	
			<label>Direccion</label>		
			<input type="text" name="direccion" />
			<label>Telefono</label>
			<input type="text" name="telefono" />
			<label>Id usuario</label>			
			<input type="text" name="id_usuario" />			
			<div>
				<input type="submit" title="Guardar" class="gu" value=" " />		
				<input type="reset" title="Limpiar" class="limp" value=" " />	
				<a id="cliente" title="Regrezar" href="javascript:void(0);"></a>	
			</div>		
		 
		 <?php 
		 
		 if (!@$query){ echo "<p class='erros'>Error al guardar</p>"; } else { echo "<p class='ok'>Guardado con exito</p>"; }
		    	@$conexion->close();
		 ?>
 </form>
 
 

