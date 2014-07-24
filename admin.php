<?PHP
   // Archivo con constantes y funciones globales en caso de ser utilizadas
    @session_start();
   include("_lib/php/globales.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="author" content="Autor: TSU Alan Jim&eacute;nez Quir&oacute;s, Jonas Santiz Lopez, Crhistian Argenis Catzin Cach, Uriel Amir Barrag&aacute;n Pereira, Universidad Tecnologica de Cancun">
      <title> <?PHP echo NOMBRE_TIENDA;?> </title>
      <script type="text/javascript" language="javascript" src="_lib/js/jquery-1.10.2.js"></script>
      <script type="text/javascript" language="javascript" src="_lib/js/jquery.cycle.js"></script>
      <script type="text/javascript" language="javascript" src="_lib/js/jquery.fancybox.pack.js"></script>
      <!--<script type="text/javascript" language="javascript" src="_lib/js/ajax_utcancun.js"></script>-->

      <script type="text/javascript" language="javascript" >
         jQuery( "body script, body style, body #visas_style_div, body .bModal" ).remove();
      </script>

      <script type="text/javascript" language="javascript" src="_lib/js/config.js"></script>
	
      <!-- JS Uriel-->
      <script src="_lib/uriel/js/tabs.js"> </script>
      <script src="_lib/uriel/js/moveform.js"></script>		
      <!-- Masonry -->
      <script src="_lib/uriel/js/masonry.min.js" ></script>
      <script src="_lib/uriel/js/imagesloaded.js" ></script>
      <!-- ENDS Masonry -->		
      <!-- Tweet -->
      <script src="_lib/uriel/js/jquery.tweet.js" ></script> 
      <!-- ENDS Tweet -->		
      <!-- superfish -->
      <script  src="_lib/uriel/js/hoverIntent.js"></script>
      <script  src="_lib/uriel/js/superfish.js"></script>
      <!-- ENDS superfish -->		
      <!-- prettyPhoto -->
      <script  src="_lib/uriel/js/jquery.prettyPhoto.js"></script>
      <!-- ENDS prettyPhoto -->
      <!-- Flex Slider -->
      <script src="_lib/uriel/js/jquery.flexslider-min.js"></script>
      <!-- ENDS Flex Slider -->
      <!-- modernizr -->
      <script src="_lib/uriel/js/modernizr.js"></script>
		
		
      <!--<style type="text/css" rel="stylesheet" media="screen">@import"css/bootstrap-3.1.1/css/bootstrap.css";</style>-->

      <!--BEGIN GOOGLE FONTS -->
      <link href='http://fonts.googleapis.com/css?family=Allan:700' rel='stylesheet' type='text/css'>
      <!--END GOOGLE FONTS -->
      <style type="text/css" rel="stylesheet" media="screen">@import"_lib/css/jquery.fancybox.css";</style>
      <style type="text/css" rel="stylesheet" media="screen">@import"_lib/uriel/css/uriel.css";</style>
      <style type="text/css" rel="stylesheet" media="screen">@import"_lib/css/general.css";</style>
   </head>

	<body>	
      <div class="wrapper" >
         <div class="header">
            <a id="home" class="logoh" href="javascript:void(0);"></a>			
            <div class="menu1" >
               <ul>
                  <li class="activ" ><a id="home" href="javascript:void(0);">Inicio</a></li>
                  <li style="display:none;" ><a id="factura" href="javascript:void(0);">Facturas</a></li>
                  <li><a class="art" href="javascript:void(0);">Articulos</a></li>
                  <li><a id="stock" href="javascript:void(0);">Admin del sitio</a></li>				  
                  <li style="display:none;" ><a id="stock" href="javascript:void(0);">Stock</a></li>
                  <li><input type="text" name="buscar" class="buscar" placeholder="Buscar" /></li>
                  <?php
                     if(isset($_SESSION['id']) && $_SESSION['id']>0){
                        echo "<li><a href=\"#\" style=\"width:150px;\">". $_SESSION['nombre'] ."</a></li><li><a href='_lib/php/salir.php' style='width:10px;'>X</a></li>";
                     }
                     else{
                        echo '<li><a class="box" data-fancybox-type="iframe" href="_lib/php/loggin.php">Iniciar Sesion</a></li>';
                     } 
                  ?>
               </ul>
               <div style="display:none;" class="menu">
                  <ul>
                     <li><a id="pc" href="javascript:void(0);">PC</a></li>
                     <li><a id="lap" href="javascript:void(0);">Laptop</a></li>
                     <li><a id="ac" href="javascript:void(0);">Accesorios</a></li>
                  </ul>
               </div>
            </div>
            <p><a href="skype:alanjkun?call">Contactenos 01 800 522 687</a></p>
         </div>

         <div class="left" >
            <div class="menu2" >
               <ul>
                  <li><a id="ofertas" href="javascript:void(0);">Promociones y Ofertas</a></li>
                  <li><a id="ask" href="javascript:void(0);">Preguntas Frecuentes</a></li>
                  <li><a id="sugerencias" href="javascript:void(0);">Quejas y Sugerencias</a></li>
                  <li><a id="mapa" class="mapa"  href="javascript:void(0);">Ubicacion</a></li>
                  <li><a id="news" href="javascript:void(0);">Noticias</a></li>
               </ul>
            </div>

            <img src="_lib/img/pc.png" alt="promo" />
            <p>A meses sin intereses</p>
            <div class="clock">
               <div id="Date"></div>
               <ul>
                  <li id="hours"> </li>
                  <li id="point">:</li>
                  <li id="min"> </li>
                  <li id="point">:</li>
                  <li id="sec"> </li>
               </ul>
            </div>
         </div>

         <p class="sep" >/Inicio</p>
         <div class="content" >

            <div class="slider" >
               <img src="_lib/img/slider/img1.jpg" alt="promo 2014" />
               <img src="_lib/img/slider/img2.jpg" alt="promo 2014" />
               <img src="_lib/img/slider/img3.jpg" alt="promo 2014" />
               <img src="_lib/img/slider/img4.jpg" alt="promo 2014" />
               <img src="_lib/img/slider/img5.jpg" alt="promo 2014" />
            </div>

            <div class="banner" >
               <h3>Solo las mejores marcas</h3>
               <img src="_lib/img/img3.png" alt="Banner" />
               <p class="text">A precio de Fabrica 2014 </p>
            </div>

            <div class="contenido" >
               <p class="textos" >En <?PHP echo NOMBRE_TIENDA;?>&copy; distribuimos &uacute;nicamente marcas reconocidas de alta calidad, nuestro eficiente sistema de log&iacute;stica nos permite enviar productos desde distintos almacenes el mismo d&iacute;a de su compra. Nuestros precios son reconocidos por ser altamente competitivos. Lo &uacute;ltimo en tecnolog&iacute;a lo encontrar&aacute; siempre en nuestro cat&aacute;logo ya que estamos a la par en productos con los principales mayoristas y fabricantes del pa&iacute;s. </p>
               <h3>Algunas de las razones por las cuales nuestros clientes quedan 100% satisfechos</h3>
               <ul>
                  <li>Ofrecemos los productos de mayor calidad de la industria a los precios m&aacute;s bajos posibles.</li>
                  <li>Tratamos a cada cliente con respeto y atenci&oacute;n que se merece.</li>
                  <li>Nos esforzamos para resolver cualquier duda sobre nuestros productos y servimos de intermediario entre el usuario final y el fabricante.</li>
                  <li>En la medida de nuestras posibilidades ofrecemos la informaci&oacute;n m&aacute;s completa disponible sobre los productos.</li>
                  <li>Procesamos las &oacute;rdenes de nuestros clientes a los pocos minutos de ser recibidas por nuestro sistema. Tenemos convenios de log&iacute;stica con mayoristas y fabricantes para embarcar los productos lo m&aacute;s pronto posible una vez liberada la orden. Usualmente el mismo d&iacute;a o al siguiente d&iacute;a h&aacute;bil de recibido el pago. </li>
                  <li>Al tener convenios exclusivos con nuestras marcas podemos comprar a precios muy por debajo que nuestra competencia, lo que resulta en un beneficio adicional para nuestros clientes. </li>
                  <li>Enviamos informaci&oacute;n continuamente a nuestros clientes   para que aprovechen promociones y est&eacute;n enterados de las nuevas tecnolog&iacute;as.</li>
                  <li>Ofrecemos a nuestros clientes corporativos y de gobierno precios muy competitivos y entregas r&aacute;pidas y oportunas. </li>
               </ul>

               <h3>Proceso de compra conveniente </h3>
               <p class="textos2" >Nuestro cat&aacute;logo en l&iacute;nea est&aacute; a su disposici&oacute;n con tan solo unos clics. Una vez que el cliente levante la orden ya sea por tel&eacute;fono, Internet, o Correo Electr&oacute;nico, el cliente procede a hacer el pago respectivo en alguna de las cuentas que manejamos o por alguno de los medios opcionales como Tarjeta de Cr&eacute;dito, PayPal, OXXO o 7-Eleven, entre otros. Para m&aacute;s informaci&oacute;n clic <a href="skype:alanjkun?call">aqu&iacute;</a>.  Ya que se efect&uacute;e el pago correspondiente a la orden, y &eacute;sta sea registrada por nuestro sistema, ya sea por la referencia en su dep&oacute;sito o transferencia o ya sea que nos d&eacute; aviso del dep&oacute;sito. <strong>NOTA: </strong>No es obligatorio el env&iacute;o de dicho documento al menos que se le solicite expresamente, nos puede avisar de su dep&oacute;sito para corroborarlo en nuestro sistema y proceder a liberar la orden correspondiente a su venta. </p>
            </div>
            <div class="promo" >			
               <div class="promos" >
                  <img src="_lib/img/img4.png" alt="Banner" />
                  <h1>Compaq HP Pavilion 401</h1><br />
                  <p>Clave del articulo #1234</p>
               </div>				
               <div class="promos" >
                  <img src="_lib/img/img5.png" alt="Banner" />
                  <h1>Acer Intel Core i5 modelo acert2014</h1><br />
                  <p>Clave del articulo #3256</p>
               </div>
               <div class="promos" >
                  <img src="_lib/img/img6.jpg" alt="Banner" />
                  <h1>Dell Core i6 modelo Dell2014</h1><br />
                  <p>Clave del articulo #568</p>
               </div>
            </div>
      </div>

      <div class="fotter" >
         <ul>
            <li><a id="us" href="#">Quienes somos?</a></li>
            <li style="display:none;" ><a id="acerca" href="#">Acerca de</a></li>
            <li><a id="sitio" href="#">Mapa del sitio</a></li>
            <li><a id="politica" href="#">Politica de privacidad</a></li>
         </ul>
         <p>
            &copy;2014 <?PHP echo NOMBRE_TIENDA;?>&reg; . Todos los Derechos Reservados, el uso de este sitio constituye un acuerdo en
            los T&eacute;rminos de Uso. Consulte las pol&iacute;ticas. Se proh&iacute;be cualquier reproducci&oacute;n 
            total o	parcial de este contenido sin autorizaci&oacute;n por 
            escrito de su titular.
         </p>
      </div>
      </div>
   </body>
</html>