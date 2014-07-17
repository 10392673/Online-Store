   <style type="text/css" rel="stylesheet" media="screen">@import"../css/general.css";</style>
   <!-- Apartado de AJAX -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>
      $(function(){
         $("#BtnEnviar").click(function(){
            var url = "valida_usuario.php"; // El script a dónde se realizará la petición.
            $.ajax({
               type: "POST",
               url: url,
               data: $("#frmlogin").serialize(), // Adjuntar los campos del formulario enviado.
               success: function(data){
                  $("#spaninfo").html(data); // Mostrar la respuestas del script PHP.
               }
            });
            return false; // Evitar ejecutar el submit del formulario.
         });
      });
   </script>
   <!-- Fin de llamada a AJAX -->

   <div class="wraper" >
      <span class="titly" >Autenticaci&oacute;n de usuario </span>
      <form method="post" id="frmlogin">
         <span class="sep" id="spaninfo"> </span>
         <div class="bloque">
            <input class="user" placeholder="Ingrese usuario" type="text" name="usuario" autofocus />
         </div>
         <div class="bloque">
            <input class="pass" placeholder="Ingrese Password" type="password" name="password" />
         </div>
         <div class="bloque">
            <input class="enviar" type="button" id="BtnEnviar" value="Iniciar Sesi&oacute;n" />
         </div>
         <a href="javascript:void(0);" class="logo"> </a>
      </form>
   </div>