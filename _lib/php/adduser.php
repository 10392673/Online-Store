  <script type="text/javascript" language="javascript" src="_lib/js/config.js"></script>
	<?php 
		include("conector.php");
		
		if($_POST) 
		{
		
		$usuario = $_POST['usuario']; 
		$clave = $_POST['clave']; 
		$nombre = $_POST['nombre']; 
		$permiso = $_POST['permiso']; 
		$activo = $_POST['activo']; 
	}
	
		@$query = mysqli_query(@$conexion, "INSERT INTO usuario (usuario, clave, nombre, permiso, activo) VALUES ('$usuario','$clave','$nombre', '$permiso','$activo')" ); 
	
	 ?>	
	 
	<div class="agreg" >
		 <form action="_lib/php/adduser.php" method="post" >
			<label>Usuario</label>
			<input type="text" name="usuario" />	
			<label>Clave de usuario</label>		
			<input type="text" name="clave" />
			<label>Nombre</label>
			<input type="text" name="nombre" />
			<label>permiso de usuario</label>		
			<input type="text" name="permiso" />
			<label>Activo</label>		
			<input type="text" name="activo" />			
			<div>
				<input type="submit" title="Guardar" class="gu" name="guardar" value=" " />		
				<input title="Limpiar" type="reset" class="limp" name="borrar" value=" " />	
				<a title="Regrezar" id="listuser" href="javascript:void(0);"></a>	
			</div>
		
		 
		 <?php 
		 
		 if (!@$query){ echo "<p class='erros'>Error al guardar</p>"; } else { echo "<p class='ok'>Guardado con exito</p>"; }
		    	@$conexion->close();
		 ?>
 </form>
 
 

