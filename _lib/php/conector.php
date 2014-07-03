<?php 

	$conexion = new mysqli();
	@$conexion->connect("localhost", "root", "", "BDSTORE");

if (@$conexion->connect_error) 
{
    die('Error de conexión: ' . $conexion->connect_error); 
}

/*   else{	
	
	echo ("conexion exitoso");
} */ 

	#@$conexion->close();	

?>

