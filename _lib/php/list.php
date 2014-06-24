<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="refresh" content="20" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reporte de Clientes</title>
	<script type="text/javascript" language="javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.cycle.js"></script>
	<script type="text/javascript" language="javascript" src="js/configuracion.js"></script>    
	<style type="text/css" rel="stylesheet" media="all">@import"css/General.css";</style>
</head>
	<body>
	
<?php 
include("php/conector.php");

	@$query = mysqli_query(@$conexion, "select * from cliente");
	
	echo "<div class='resul' > <label class='logo' ></label>
			<h1>Tabla de resultados de la base de datos Clientes</h1>
				<table>
					 <tr class='first' ><td>ID CLIENTE</td><td>NOMBRE</td><td>DIRECCION</td><td>TELEFONO</td><td>RFC</td></tr>";	
					 
	while(@$row = mysqli_fetch_array($query)){

		echo "<tr class='second'>";
		echo "<td>".@$row[idcliente]."</td>";
		echo "<td>".@$row[nombre]."</td>";
		echo "<td>".@$row[direccion]."</td>";
		echo "<td>".@$row[telefono]."</td>";
		echo "<td>".@$row[rfc]."</td>";
		echo "</tr>";	
		
	} 
		echo   "</table>
			</div>";	    
    
   	@$conexion->close();	
	
    ?>

		
	</body>
</html>
