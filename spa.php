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
        
        
<?php include("protocolo_covid.php");?>          
        
        <div class="kerhoteles">
	        <div class="container">
	        <h1>ARMONIA SPA</h1>
   <div class="salones2" style="padding:0px;">
        <div class="container">
            <p>Por medidas de protocolo COVID-19 no est&aacute; habilitado el spa. Para consultas, comun&iacute;quese con nuestro canal de whatsapp
				<!--<a href="https://wa.me/5491130174497" target="_blank" class="hidden-md hidden-lg linkmobile"><i class="fa fa-whatsapp"></i> <b>Pr&oacute;ximamente nuevas promociones, consulta por las actuales en nuestro canal de WhatsApp +54 9 11 3017-4497</b></a>-->
				<a href="https://api.whatsapp.com/send?phone=5491130174497&text=Hola!%20Me%20contacto%20a%20través%20de%20la%20web%20y%20me%20gustaría%20realizar%20una%20consulta%20sobre%20Armonía%20SPA" target="_blank"><b>+54 9 11 3017-4497</b></a>
			</p>
            <div class="habitaciones">
                    <div class="clear"></div>
                </div>
            </div>
        </div> 
	        </div>
        </div>
        
        
        
   
        
        
 
        
		<?php include("mensaje_whatsapp.php");?>   
        <?php include("footer.php");?>
        
        
        