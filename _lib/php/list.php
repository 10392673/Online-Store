<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<<<<<<< HEAD
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Autor: TSU Alan Jim&eacute;nez Quir&oacute;s, Jonas Santiz Lopez, Crhistian Argenis Catzin Cach, Uriel Amir Barrag&aacute;n Pereira, Universidad Tecnologica de Cancun">
	<title>P&aacute;gina en construcci&oacute;n </title>
	<script type="text/javascript" language="javascript" src="../js/jquery-1.10.2.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.cycle.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" language="javascript" src="../js/config.js"></script>
	<!--<style type="text/css" rel="stylesheet" media="screen">@import"css/bootstrap-3.1.1/css/bootstrap.css";</style>-->
	<style type="text/css" rel="stylesheet" media="screen">@import"../css/jquery.fancybox.css";</style>
	<style type="text/css" rel="stylesheet" media="screen">@import"../css/general.css";</style>
=======
    <meta http-equiv="refresh" content="20" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reporte de Clientes</title>
	<script type="text/javascript" language="javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.cycle.js"></script>
	<script type="text/javascript" language="javascript" src="js/configuracion.js"></script>    
	<style type="text/css" rel="stylesheet" media="all">@import"css/General.css";</style>
>>>>>>> ae5eda0f46d4a67cba8de20178c34cb6daf96932
</head>
	<body>
	
<?php 
<<<<<<< HEAD
include("conector.php");

	@$query = mysqli_query(@$conexion, "select * from alumnos");
=======
include("php/conector.php");

	@$query = mysqli_query(@$conexion, "select * from cliente");
>>>>>>> ae5eda0f46d4a67cba8de20178c34cb6daf96932
	
	echo "<div class='resul' > <label class='logo' ></label>
			<h1>Tabla de resultados de la base de datos Clientes</h1>
				<table>
<<<<<<< HEAD
					 <tr class='first' ><td>ID CLIENTE</td><td>NOMBRE</td><td>EDAD</td><td>GRADO</td></tr>";	
=======
					 <tr class='first' ><td>ID CLIENTE</td><td>NOMBRE</td><td>DIRECCION</td><td>TELEFONO</td><td>RFC</td></tr>";	
>>>>>>> ae5eda0f46d4a67cba8de20178c34cb6daf96932
					 
	while(@$row = mysqli_fetch_array($query)){

		echo "<tr class='second'>";
<<<<<<< HEAD
		echo "<td>".@$row[id]."</td>";
		echo "<td>".@$row[nombre]."</td>";
		echo "<td>".@$row[edad]."</td>";
		echo "<td>".@$row[grado]."</td>";
=======
		echo "<td>".@$row[idcliente]."</td>";
		echo "<td>".@$row[nombre]."</td>";
		echo "<td>".@$row[direccion]."</td>";
		echo "<td>".@$row[telefono]."</td>";
		echo "<td>".@$row[rfc]."</td>";
>>>>>>> ae5eda0f46d4a67cba8de20178c34cb6daf96932
		echo "</tr>";	
		
	} 
		echo   "</table>
			</div>";	    
    
   	@$conexion->close();	
	
    ?>

		
	</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> ae5eda0f46d4a67cba8de20178c34cb6daf96932
