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
		include("php/conector.php");
		
		if($_POST) 
		{
		
		$id = $_POST['idcliente']; 
		$nombre = $_POST['nombre']; 
		$dir = $_POST['direccion']; 
		$tel = $_POST['tel']; 
		$rfc = $_POST['rfc']; 
	}
	
		@$query = mysqli_query(@$conexion, "INSERT INTO cliente (idcliente, nombre, direccion, telefono, rfc) VALUES ('$id','$nombre','$dir','$tel', '$rfc')" ); 
	
	 ?>	
	 
	<div class="agreg" >
		 <form action="Agregar.php" method="post" >
			<label>Id Cliente</label>
			<input type="text" name="idcliente" />	
			<label>Nombre</label>
			<input type="text" name="nombre" />	
			<label>Direccion</label>		
			<input type="text" name="direccion" />
			<label>Telefono</label>
			<input type="text" name="tel" />
			<label>RFC</label>		
			<input type="text" name="rfc" />
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