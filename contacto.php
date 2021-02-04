<?php include("header.php");?>
        
        
        
        <div class="cabcontacto"><img src="img/04_CONTACTO/KER_WebHoteles_CONTACTO_Banner.jpg" alt="KER_WebHoteles_CONTACTO_Banner"/></div>
        
		
		<div class="botonreservar2 hidden-lg hidden-sm hidden-md">RESERVAR</div>
      				<div class="buscador2"><!--  -->
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank">
	        <li class="item" style="display:inline-block;">
	        	<select name="sucursal" class="sucursal">
		        <option>Sucursal</option>
		        <option value="110467">Ker San Telmo</option>
		        <option value="73729">Ker Recoleta</option>
		        <option value="73742">Ker Belgrano</option>
		        <option value="74787">Ker Urquiza</option>
	        </select>
	        </li>
	        <li class="item"><input type="text" id="from" name="DateIn"/></li>
	        <li class="item"><input type="text" id="to" name="DateOut"/></li>
	        <li class="item">
	        <select name="Adults">
		        <option>Huespedes</option>
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
	        </select>
	        </li>
	        <li class="item"><input type="submit" value="RESERV&Aacute;"></li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
        </div>

<?php include("protocolo_covid.php");?>     
     
       <div class="contacto_ker" id="contacto">
	       <div class="container">
		       
		       <div class="col-md-6 col2">
		        <form action="enviar.php" method="post">
		        <h1><span>Contactanos</span></h1>
		        
		        <input type="hidden" name="asunto" value="<?php echo $_GET['tipo']; ?>" style="text-transform:capitalize;">
		        <label>Nombre</label>
		        <input type="text" name="nombre" required>
		        <label>Apellido</label>
		        <input type="text" name="apellido" required>
		        <label>Email</label>
		        <input type="email" name="email" required>
		        <label>Nacionalidad</label>
		        <input type="text" name="nacionalidad" required>
		        <label>Hotel</label>
		        <select name="hotel">
			        <option value="Ker San Telmo">Ker San Telmo</option>
			        <option value="Ker Recoleta">Ker Recoleta</option>
			        <option value="Ker Belgrano">Ker Belgrano</option>
			        <option value="Ker Urquiza">Ker Urquiza</option>
		        </select>
		        <label>Comentario</label>
		        <textarea name="mensaje" rows="6"></textarea>
		        <!--<div class="left">Políticas de privacidad <a href="">click acá</a></div>-->
		        <div class="right"><input type="submit" value="ENVIAR"></div>
		        <div class="clear"></div>
                <?php if(isset($_REQUEST['tipo']) && $_REQUEST['tipo'] !=''){ ?>
						<input type="hidden" name="tipo" value="<?php echo $_REQUEST['tipo']; ?>" />
				
                <?php } ?>
                
                </form>
	        </div>
	        
	        
	        
	        <div class="col-md-6 col1">
		        
		        <div class="item"><!--  -->
			        <div class="col-md-4"><div class="icono"><img src="img/2/Home_Ker_San_Telmo_logo.png"></div></div>
			        <div class="col-md-8">
				        <li class="icono3"><i class="fa fa-map-marker" aria-hidden="true"></i>Av. Paseo Colón 455, Buenos Aires, Argentina - (C1063ACE)</li>
				        <li class="icono1"><i class="fa fa-phone" aria-hidden="true"></i> 0-810-3456-537/ 5277-4600</li>
				        <li class="icono1"><i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://wa.me/5491130174497">11 3017-4497</a>
				        <li class="icono2"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:reservassantelmo@kerhoteles.com.ar">reservassantelmo@kerhoteles.com.ar</a></li>
				        
						<li><a href="http://www.kersantelmo.com.ar" target="_blank">www.kersantelmo.com.ar</a></li>
			        </div>
			        <div class="clear"></div>
		        </div><!--  -->
		        
		        <div class="item"><!--  -->
			        <div class="col-md-4"><div class="icono"><img src="img/2/Home_Ker_Recoleta_logo.png"></div></div>
			        <div class="col-md-8">
				        <li class="icono3"><i class="fa fa-map-marker" aria-hidden="true"></i>Marcelo T. de Alvear 1368, Buenos Aires, Argentina - (C1058AAV)</li>
				        <li class="icono1"><i class="fa fa-phone" aria-hidden="true"></i> 0-810-3456-537/ 5277-4600</li>
				        <li class="icono1"><i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://wa.me/5491130174497">11 3017-4497</a>
						<li class="icono2"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:reservasrecoleta@kerhoteles.com.ar">reservasrecoleta@kerhoteles.com.ar</a>
						
						<li><a href="http://kerrecoleta.com.ar">www.kerrecoleta.com.ar</a></li>
			        </div>
			        <div class="clear"></div>
		        </div><!--  -->
		        
		        <div class="item"><!--  -->
			        <div class="col-md-4"><div class="icono"><img src="img/2/Home_Ker_Belgrano_logo.png"></div></div>
			        <div class="col-md-8">
				        <li class="icono3"><i class="fa fa-map-marker" aria-hidden="true"></i>Vuelta de Obligado 2727, Buenos Aires, Argentina - (C1428ADS)</li>
				        <li class="icono1"><i class="fa fa-phone" aria-hidden="true"></i> 0-810-3456-537/ 5277-4600</li>
				        <li class="icono1"><i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://wa.me/5491130174497">11 3017-4497</a>
						<li class="icono2"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:reservasbelgrano@kerhoteles.com.ar">reservasbelgrano@kerhoteles.com.ar</a>
						
						<li><a href="http://kerbelgrano.com.ar">www.kerbelgrano.com.ar</a></li>
			        </div>
			        <div class="clear"></div>
		        </div><!--  -->
		        
		        <div class="item"><!--  -->
			        <div class="col-md-4"><div class="icono"><img src="img/2/Home_Ker_Urquiza_logo.png"></div></div>
			        <div class="col-md-8">
				        <li class="icono3"><i class="fa fa-map-marker" aria-hidden="true"></i>Diaz Colodrero 2513, Buenos Aires, Argentina - (C1431BZC)</li>
				        <li class="icono1"><i class="fa fa-phone" aria-hidden="true"></i> 0-810-3456-537/ 5277-4600</li>
				        <li class="icono1"><i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://wa.me/5491130174497">11 3017-4497</a>
						<li class="icono2"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:reservasurquiza@kerhoteles.com.ar">reservasurquiza@kerhoteles.com.ar</a>
						
						<li><a href="http://kerurquiza.com.ar">www.kerurquiza.com.ar</a></li>
			        </div>
			        <div class="clear"></div>
		        </div><!--  -->
		        
		        
		       
	        <div class="clear"></div>
        </div> 
        </div>
        </div>
        
        <?php include("mensaje_whatsapp.php");?>   
        <?php include("footer.php");?>
<script src="js/jquery.bxslider1/jquery.bxslider.js"></script>
		<link rel="stylesheet" href="js/jquery.bxslider1/jquery.bxslider.css">
        
		
		<script>
	            $(document).ready(function(){
    $('.bxslider2').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: true
  	});
});
    
    $(document).ready(function(){
    $('.bxslider').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});

$(document).ready(function(){
    $('.bxslider3').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});
</script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">
<script>
		$(document).ready(function() {
		$('.carousel1').slick({
			
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});});
</script>
    </body>
</html>
