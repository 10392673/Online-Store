<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Agregar</title>
	<script type="text/javascript" language="javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.cycle.js"></script>
	<script type="text/javascript" language="javascript" src="js/configuracion.js"></script>    
	<style type="text/css" rel="stylesheet" media="all">@import"css/General.css";</style>
</head>
	<body>
	
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
	
		@$query = mysqli_query(@$conexion, "INSERT INTO cliente (id, usuario, clave, nombre, permiso, activo) VALUES ('$id','$usuario','$clave','$nombre', '$permiso','$activo')" ); 
	
	 ?>	
	 
	<div class="agreg" >
		 <form action="add.php" method="post" >
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
				<input type="submit" name="guardar" value="Guardar" />		
				<input type="reset" name="borrar" value="Limpiar" />		
			</div>
		 </form>
		 
		 <?php 
		 
		 if (!@$query){ echo "<p class='erros'>Error al guardar</p>"; } else { echo "<p class='ok'>Guardado con exito</p>"; }
		    	@$conexion->close();
		 ?>
		 
	</div>
	
	</body>
</html>