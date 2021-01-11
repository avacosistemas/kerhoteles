<?php include("header.php");


/*-------- promocinoes -------

$query_promociones = "SELECT * FROM promociones order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);
$totalRows_promociones = mysqli_num_rows($promociones);

do{
	
	} while ($row_promociones = mysqli_fetch_assoc($promociones));

*/





?>
        <!--<div class="bookingboton">BOOK NOW</div>
        <div class="videohome">
	        <div class="volumen">
	        <span class="vol1"><i class="fa fa-volume-off" aria-hidden="true"></i></span>
	        <span class="vol2"><i class="fa fa-volume-up" aria-hidden="true"></i></span>
        </div>
    	<video loop="loop" muted="muted" autoplay="autoplay" width="100%" id="videoreel">
					<source src="KER_RRSS_19_09_16_Inauguracion.mp4"/>
      				</video>-->
      				<img src="img/06_SPA/KER_WebHoteles_SPA_Banner.jpg" alt="KER_WebHoteles_SPA_Banner" class="img-responsive" />
      				
      				
      				<!--<div class="botonreservar hidden-lg hidden-sm hidden-md">RESERVAR</div>-->
      				<div class="buscador"><!--  -->
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
	        <!--<li class="item">
	        <select name="RoomTypeID">
		        <option>Tipo de habitación</option>
		        <option value="484905">Classic</option>
		        <option value="484906">Superior</option>
		        <option value="484907">Executive</option>
		        <option value="484908">Deluxe</option>
	        </select>
	        </li>-->
	        
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
        
        
        
        
        <div class="kerhoteles">
	        <div class="container">
	        <h1>ARMONIA SPA</h1>
	        <p>Ofrecemos algo más que una estadía, ofrecemos una estadía memorable y placentera.
En cada una de nuestras casas contamos con un spa totalmente equipado, donde nuestros huéspedes podrán hacer ejercicio, distenderse en la piscina o jacuzzi, o disfrutar de un masaje y/o un tratamiento facial.</p>
	        </div>
        </div>
        <img src="img/06_SPA/KER_WebHoteles_SPA_01.jpg" alt="KER_WebHoteles_SPA_01" class="img-responsive" />
        <div class="spa2">
	        
	        <div class="col-md-3 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
		        <a href="https://kersantelmo.com.ar/spa.php" target="_blank">
			    <img src="img/06_SPA/KER_WebHoteles_SPA_LogoArmonia_CLARO.svg">
		        <div class="barrita"></div>
		        <h2>KER SAN TELMO</h2>
		        </a>
	        </div>
	        
	        <div class="col-md-3 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
		        <!--<a href="https://kerrecoleta.com.ar/spa.php" target="_blank">-->
			    <a href="https://kerrecoleta.com.ar/kerrecoleta-main/spa.php" target="_blank">
			    <img src="img/06_SPA/KER_WebHoteles_SPA_LogoArmonia_OSCURO.svg">
		        <div class="barrita"></div>
		        <h2>KER RECOLETA</h2>
		        </a>
	        </div>
	        
	        <div class="col-md-3 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <!--<a href="https://kerbelgrano.com.ar/spa.php" target="_blank">-->
			<a href="https://kerbelgrano.com.ar/kerbelgrano-main/spa.php" target="_blank">
			    <img src="img/06_SPA/KER_WebHoteles_SPA_LogoArmonia_CLARO.svg">
		        <div class="barrita"></div>
		        <h2>KER BELGRANO</h2>
		        </a>
	        </div>
	        
	        <div class="col-md-3 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <!--<a href="http://kerurquiza.com.ar/spa.php" target="_blank">-->
			<a href="http://kerurquiza.com.ar/kerurquiza-main/spa.php" target="_blank">
			    <img src="img/06_SPA/KER_WebHoteles_SPA_LogoArmonia_OSCURO.svg">
		        <div class="barrita"></div>
		        <h2>KER URQUIZA</h2>
		        </a>
	        </div>
	        
	        
	        
	        
	        
	        <div class="clear"></div>
        </div>
        
        <img src="img/06_SPA/KER_WebHoteles_SPA_02.jpg" alt="KER_WebHoteles_SPA_02" class="img-responsive" />
        <div class="casco" id="ubicacion">
	        <h1>Time to relax</h1>
	        <a href="contacto.php?tipo=spa" class="botonconsulta">CONSULT&Aacute;</a>
        </div>
        
        
        
        
        
        
        
        <div class="buscador2" style="display:none;"><!--  -->
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank">
	        <li class="item" style="display:inline-block;">
	        	<select name="sucursal" class="sucursal">
		        <option>Sucursal</option>
		        <option value="110467">Ker Historic</option>
		        <option value="73729">Ker Centro</option>
		        <option value="73742">Ker Urban</option>
		        <option value="74787">Ker House</option>
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
        
		<?php include("mensaje_whatsapp.php");?>   
        <?php include("footer.php");?>
        
        
        