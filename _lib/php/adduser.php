  
	<style type="text/css" rel="stylesheet" media="all">@import"../css/General.css";</style>

	<?php 
		include("conector.php");
		
		if($_POST) 
		{
		
		$id = $_POST['id']; 
		$usuario = $_POST['usuario']; 
		$clave = $_POST['clave']; 
		$nombre = $_POST['nombre']; 
		$permiso = $_POST['permiso']; 
		$activo = $_POST['activo']; 
	}
	
		@$query = mysqli_query(@$conexion, "INSERT INTO usuario (id, usuario, clave, nombre, permiso, activo) VALUES ('$id','$usuario','$clave','$nombre', '$permiso','$activo')" ); 
	
	 ?>	
	 
	<div class="agreg" >
		 <form action="_lib/php/adduser.php" method="post" >
			<label>Id Cliente</label>
			<input type="text" name="id" />	
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
				<input type="submit" class="gu" name="guardar" value=" " />		
				<input type="reset" class="limp" name="borrar" value=" " />		
			</div>
		
		 
		 <?php 
		 
		 if (!@$query){ echo "<p class='erros'>Error al guardar</p>"; } else { echo "<p class='ok'>Guardado con exito</p>"; }
		    	@$conexion->close();
		 ?>
 </form>
 
 

