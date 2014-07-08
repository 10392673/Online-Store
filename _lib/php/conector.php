<?php 

	$conexion = new mysqli();
	@$conexion->connect("mysql4.000webhost.com", "a5843318_jonas", "Jlopez23", "a5843318_BDSTORE");

if (@$conexion->connect_error) 
{
    die('Error de conexión: ' . $conexion->connect_error); 
}

/*   else{	
	
	echo ("conexion exitoso");
} */ 

	#@$conexion->close();	

?>

