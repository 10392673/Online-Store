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
		
		@$id = $_POST['id']; 
		@$producto = $_POST['producto']; 
		@$precio = $_POST['precio']; 
		@$cantidad = $_POST['cantidad']; 
		@$fechahora = $_POST['fechahora']; 
		@$id_usuario = $_POST['id_usuario']; 
		@$id_cliente = $_POST['id_cliente']; 
		@$producto_id = $_POST['producto_id']; 
	}
	
		@$query = mysqli_query(@$conexion, "INSERT INTO venta (id, producto, precio, cantidad, fechahora, id_usuario, id_cliente, producto_id, ) VALUES ('@$id','@$producto','@$precio','@$cantidad', '@$fechahora', '@$id_usuario', '@$id_cliente', '@$producto_id')" ); 
	
	 ?>	
	 
	<div class="agreg" >
		 <form action="add.php" method="post" >
			<label>Producto</label>
			<input type="text" name="id" />	
			<label></label>
			<input type="text" name="nombre" />	
			<label>Precio</label>		
			<input type="text" name="precio" />
			<label>Cantidad</label>
			<input type="text" name="cantidad" />
			<label>Describcion</label>		
			<input type="text" name="id_categoria" />
			<div>
				<input type="submit" name="guardar" value="Guardar" />		
				<input type="reset" name="borrar" value="Limpiar" />		
			</div>
		 </form>
		 
		 <?php 
		 
		 if (!@$query){ echo "<p class='erros'>Error al Enviar</p>"; } else { echo "<p class='ok'>Enviado con exito</p>"; }
		    	@$conexion->close();
		 ?>
		 
	</div>
	
	</body>
</html>