<?php
   $conexion = new mysqli();
   // @$conexion->connect("mysql4.000webhost.com", "a5843318_jonas", "Jlopez23", "a5843318_BDSTORE"); // Hosting
   @$conexion->connect("localhost", "root", "", "tienda"); // localhost, (host,usuario,contrase�a,bd)

   if (@$conexion->connect_error){
      die('Error de conexi�n: ' . $conexion->connect_error);
   }

   /*else{
      echo ("Conexion exitosa");
   }*/
   #@$conexion->close();
?>