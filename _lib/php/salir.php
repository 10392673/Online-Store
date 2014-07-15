<?PHP
   @session_start();
   session_destroy();

   $_SESSION['id'] = "";
   $_SESSION['usuario'] = "";
   $_SESSION['nombre'] = "";
   $_SESSION['permiso'] = "";
   $_SESSION['activo'] = "";

   unset($_SESSION['id']);
   unset($_SESSION['usuario']);
   unset($_SESSION['nombre']);
   unset($_SESSION['permiso']);
   unset($_SESSION['activo']);
   header("location: ../../index.php")
?>