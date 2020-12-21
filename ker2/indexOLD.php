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
        
        <div class="videohome">
	        <div class="volumen">
	        <span class="vol1"><i class="fa fa-volume-off" aria-hidden="true"></i></span>
	        <span class="vol2"><i class="fa fa-volume-up" aria-hidden="true"></i></span>
        </div>
    	<video loop="loop" muted="muted" autoplay="autoplay" width="100%" id="videoreel">
					<source src="KER_RRSS_19_09_16_Inauguracion.mp4"/>
      				</video>
      				
      				
      				
      				<div class="botonreservar hidden-lg hidden-sm hidden-md">RESERVAR</div>
      				<div class="buscador"><!--  -->
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank">
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
        </div>
        
        
        
        <div class="stay">
	        <div class="col-md-6">
		        <div class="pad wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <h1>Stay a while</h1>
		        <p>Ker Historic se caracteriza por su estratégica ubicación dentro de un enclave turístico excepcional, a pocos pasos de los principales atractivos de la Ciudad, rodeado de una innumerable variedad de restaurantes y cafés, y con excelentes accesos a los principales aeropuertos y terminales de trasbordo.</p>
		        <h2><span>Explore rooms & suites</span></h2>
		        <div class="clear"></div>
		        <a href="https://reservations.travelclick.com/110467?languageid=2" target="_blank">RESERV&Aacute;</a>
		        </div>
	        </div>
	        <div class="col-md-6 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Foto_Stayawhile.jpg" alt="Ker_Historic_SanTelmo_BsAs_Foto_Stayawhile" class="img-responsive foto">
	        </div>
	        <div class="clear"></div>
        </div>
        
        <div class="casco" id="ubicacion">
	        <h1>Casco histórico</h1>
	        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.656382393699!2d-58.37192468448255!3d-34.612849565488816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3352a931d341b%3A0x5bbc514285b71bea!2sKer%20San%20Telmo%20Hotel%20%26%20Events!5e0!3m2!1ses!2sar!4v1568675487092!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        
        <div class="trip">
	        <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Foto_Nuestros_huespedes.jpg" alt="Ker_Historic_SanTelmo_BsAs_Foto_Nuestros_huespedes" class="img-responsive"></div>
	        <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Logo_Tripadvisor.svg" width="61" class="icono">
		        <h1>Nuestros <span></span>huéspedes</h1>
		        <div class="barrita"></div>
		        <div id="TA_selfserveprop387" class="TA_selfserveprop"><ul id="XbIJ0ZSaxGV" class="TA_links 895rfcLLJ"><li id="0Iho6t" class="a0t1vsho"><a target="_blank" href="https://www.tripadvisor.com.ar/"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=387&amp;locationId=19004067&amp;lang=es_AR&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
	        </div>
	        <div class="clear"></div>
        </div>
        
        <div class="banner1">
	        <img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Aplacetodiscover.jpg" alt="Ker_Historic_SanTelmo_BsAs_Aplacetodiscover" class="img-responsive hidden-xs">
	        <img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Aplacetodiscover_Mobile.jpg" alt="Ker_Historic_SanTelmo_BsAs_Aplacetodiscover_Mobile" class="img-responsive hidden-md hidden-lg hidden-sm">
        </div>
        
        <div class="banner2">
	        <img src="img/01Home/Banner_Halo.jpg" alt="Ker_Historic_SanTelmo_BsAs_Aplacetodiscover" class="img-responsive hidden-xs">
	        <img src="img/01Home/Banner_Halo_Mobile.jpg" alt="Ker_Historic_SanTelmo_BsAs_Aplacetodiscover_Mobile" class="img-responsive hidden-md hidden-lg hidden-sm">
        </div>
        
        <div class="hoteles">
	        <h1>KER hoteles</h1>
	        
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
		        <a href="http://kerhoteles.com.ar" target="_blank">
			    <img src="img/01Home/Ker_Centric.svg">
		        <div class="barrita"></div>
		        <h2>Recoleta</h2>
		        </a>
	        </div>
	        
	        <div class="col-md-4 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <a href="http://kerhoteles.com.ar" target="_blank">
			    <img src="img/01Home/KER_Urban.svg">
		        <div class="barrita"></div>
		        <h2>Villa Urquiza</h2>
		        </a>
	        </div>
	        
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <a href="http://kerhoteles.com.ar" target="_blank">
			    <img src="img/01Home/Ker_House.svg">
		        <div class="barrita"></div>
		        <h2>Belgrano</h2>
		        </a>
	        </div>
	        
	        <div class="clear"></div>
        </div>
        
        <div class="buscador2" style="display:none;"><!--  -->
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank">
	        <li class="item">
	        <select name="room">
		        <option>Tipo de habitación</option>
		        <option value="Classic Room">Classic</option>
		        <option value="Habitacion Superior">Superior</option>
		        <option value="Executive Room">Executive</option>
		        <option value="Habitacion Deluxe">Deluxe</option>
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
        
        <?php include("footer.php");?>
        
        
        <?php
	        $query_promociones = "SELECT * FROM promociones WHERE destacado_home = 'Y' order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);
$totalRows_promociones = mysqli_num_rows($promociones);
?>


<?php if($totalRows_promociones!=0){?>
   <div class="modal fade" id="myModal" style="z-index:99999; width:700px; height:600px; margin:auto; background-color:#fff;">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>PROMOCIONES</h3>
  </div>
  <div class="modal-body">
    <a href="promociones_detalle.php?id=<?php echo $row_promociones['Id']; ?>"><img src="img_promociones/<?php echo $row_promociones['foto_popup_esp']; ?>" width="100%"></a>
  </div>
  
</div>
        <script type="text/javascript">
    $('.modal').modal('show');
</script>
<style>
	.modal-backdrop.in{opacity:0;}
	@media (max-width: 500px) {
	.modal-body{max-width:100%; height:400px!important; display:block; margin:auto;}
	.modal{width:100%!important;}
	}
</style>
<?php }?>