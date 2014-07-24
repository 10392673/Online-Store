<?php
   @session_start();
   /**
    * Archivo que recibe las solicitudes de login del archivo loggin.php
    * Valida los datos del usuario y el nivel que este tiene para permitirle
    * el acceso al sitio o bloquearlo en caso necesario
   */

   $resultado = "";
   /* Filtrar los datos */
   @$usuario = addslashes(htmlspecialchars($_POST["usuario"]));
   @$password = addslashes(htmlspecialchars($_POST["password"]));

   // Verificar que los campos no estén vacíos
   if(@$usuario=="" || @$password ==""){
      echo "<span style='background-color:red;padding:2px 5px;'>Favor de escribir su <i>usuario</i> y <i>contrase&ntilde;a</i>.</span>";
   }else{
      // Hacer consulta a la BD para verifiar que los datos esten correctos
      include("conector.php"); // Archivo que maneja las conexiones a la BD
      // Consultar
      @$query = mysqli_query(@$conexion, "SELECT * FROM usuario WHERE usuario='$usuario' AND clave=md5('$password')");
      $Filas = mysqli_num_rows($query);
      if($Filas==1){
         $Columna = mysqli_fetch_assoc($query);
         // Pasar datos de la BD a variables de sesión
         $_SESSION['id']      = $Columna['id'];
         $_SESSION['usuario'] = $Columna['usuario'];
         $_SESSION['nombre']  = $Columna['nombre'];
         $_SESSION['permiso'] = $Columna['permiso'];
         $_SESSION['activo']  = $Columna['activo'];
         echo '<span style="background-color:blue;padding:2px 5px;"> Bienvenid@ al sistema. </span>'.
            '<script language="JavaScript" type="text/javascript">'.
            'var pagina="../../admin.php";'.
            'function redireccionar(){parent.window.location=pagina;} setTimeout("redireccionar()", 100);</script>';
      }else{
         echo "<span style='background-color:red;padding:2px 5px;'> Los datos ingresados son incorrectos.</span>";
      }
   }
?>