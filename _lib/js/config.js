jQuery(document).ready(function(){
	
	jQuery( "body script, body style, body #visas_style_div, body .bModal" ).remove();
 	

		//se active las listas
    jQuery("ul li a").click(function() {
        jQuery("ul li").removeClass("activ");
        jQuery(this).parent(0).addClass("activ");
    });
	
    jQuery("ul li .box").fancybox({
        maxWidth: 590,
        maxHeight: 280,
        fitToView: false,
        width: '100%',
        height: '100%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });
	
	//carrusel de imagenes	
	jQuery('.slider').cycle({ 
		fx:    'scrollLeft', 
		delay: -1000 
	}); 
	

/* 	jQuery("ul li a, .header .logoh").click(function(){
	
		jQuery( ".content" ).load("_lib/php/"+jQuery(this).attr("id") + ".php");
		
	}); */

	jQuery("a").click(function(){
	
		jQuery( ".content").load("_lib/php/"+jQuery(this).attr("id") + ".php");
		//#alert("hola");
	});
	

 	jQuery(".menu1 ul li .art, .menu1 .menu").hover(function(){
	
		jQuery( ".menu1 .menu" ).show();
	}, function(){
		jQuery( ".menu1 .menu" ).hide();
	}); 
	
	
	// Creamos 2 variables con los nombres de los meses.
	var monthNames = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre" ]; 
	var dayNames= ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"]

	// Cramos un dato newDate()
	var newDate = new Date();

	// Extraemos la hora del objecto
	newDate.setDate(newDate.getDate());

	// Sacamos dia, mes y a�o
	jQuery('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

		setInterval( function() {
		
			// Creamos los newDate() y extraemos los segundos
			var seconds = new Date().getSeconds();

			jQuery("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
			},1000);
			
		setInterval( function() {
		
			// Creamos un newDate() y extraemos los minutos
			var minutes = new Date().getMinutes();

			jQuery("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
			},1000);
			
		setInterval( function() {
		
			//Creamos un newDate() y extraemos la hora
			var hours = new Date().getHours();
			
			// Add a leading zero to the hours value
			jQuery("#hours").html(( hours < 10 ? "0" : "" ) + hours);
			}, 1000); 

	});  


												



