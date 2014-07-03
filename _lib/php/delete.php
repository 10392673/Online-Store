<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Eliminar</title>
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
		
		}
	
		@$query = mysqli_query(@$conexion, "delete from cliente where idcliente = '$id'" ); 

	 ?>	
	 
	<div class="agreg" >
		 <form action="Eliminar.php" method="post" >
			<label>Id Cliente</label>
			<input type="text" name="idcliente" />	
			<div>
				<input type="submit" name="eliminar" value="Eliminar" />		
				<!--<a href="Clientes.php">Regrezar</a>	-->	
			</div>
		 </form>
		 <?php 
		 
		 if (!@$query){ echo "<p class='erros'>Error al enviar</p>"; } else { echo "<p class='ok'>Eliminado con exito</p>"; }
		    	@$conexion->close(); 
		 ?>		 
	</div>
	
	</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> ae5eda0f46d4a67cba8de20178c34cb6daf96932
