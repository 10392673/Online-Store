<?php 

	@$nombre=$_POST['name'];
	@$correo=$_POST["email"];
	@$tele=$_POST["tel"];	
	@$ciudad=$_POST["ciudad"];	
	@$coment=$_POST["comments"];	
		
	if(strcmp(@$nombre,"")!=0 && strcmp(@$correo,"")!=0 && strcmp(@$tele,"")!=0 && strcmp(@$ciudad,"")!=0 && strcmp(@$coment,"")!=0)
	
	{
	
	@$destino = "jlopez@e-travelsolution.com";
	
@$elcuerpo = '
  <h3>Quejas y Sugerencias de la pagina Online-Store </h3>
  <p>El sr(a) ' .@$nombre.', envi� los siguientes datos:
  <br>
  <p>Correo: '.@$correo.'
  <br>
  <p>Tel�fono: '.@$tele.'
  <br>
  <p>Ciudad: '.@$ciudad.'
  <br>
  <p>Comentario:</p>
  <p>'.@$coment.'</p>
';
	
//para el env�o en formato HTML 
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
 
//direcci�n del remitente
$headers .= "From: ".@$nombre. " < ".@$correo."\r\n"." >";
 
//direcci�n de respuesta, si queremos que sea distinta que la del remitente
 
$headers .= "Reply-To: ".@$correo."\r\n";
 
//ruta del mensaje desde origen a destino
 
$headers .= "Return-path: jlopez@e-travelsolution.com\r\n";
 
//direcciones que recibi�n copia
 
$headers .= "Cc: thimixsadecv@hotmail.com\r\n";
//direcciones que recibir�n copia oculta
 
//$headers .= "Bcc: @pepe.com,juan@juan.com\r\n";
 
@$elasunto="Quejas y Sugerencias";
 
mail(@$destino,@$elasunto,@$elcuerpo,@$headers);
}

header("Location: ../../");

	
?>

