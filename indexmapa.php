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
        <!--<div class="bookingboton">BOOK NOW</div>-->
        <!--<div class="videohome">
	        <div class="volumen">
	        <span class="vol1"><i class="fa fa-volume-off" aria-hidden="true"></i></span>
	        <span class="vol2"><i class="fa fa-volume-up" aria-hidden="true"></i></span>
        </div>
    	<video loop="loop" muted="muted" autoplay="autoplay" width="100%" id="videoreel">
					<source src="KER_RRSS_19_09_16_Inauguracion.mp4"/>
      				</video>-->
      				
      				
      			<div class="carousel1">
	      			
	      			<div class="item"><img src="img/00_KER_RECOLETA_HOTELES_banner_san_telmo.jpg"></div>
	      			<div class="item"><img src="img/00_KER_RECOLETA_HOTELES_banner_recoleta.jpg"></div>
	      			<div class="item"><img src="img/00_KER_RECOLETA_HOTELES_banner_belgrano.jpg"></div>
	      			<div class="item"><img src="img/00_KER_RECOLETA_HOTELES_banner_urquiza.jpg"></div>
      			</div>
      				
      				
      				
      				<div class="botonreservar hidden-lg hidden-sm hidden-md">RESERVAR</div>
      				<div class="buscador"><!--  -->
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank" id="formularioreserva">
	        <!--<li class="item">
	        <select name="RoomTypeID">
		        <option>Tipo de habitación</option>
		        <option value="484905">Classic</option>
		        <option value="484906">Superior</option>
		        <option value="484907">Executive</option>
		        <option value="484908">Deluxe</option>
	        </select>
	        </li>-->
	        <li class="item">
	        	<select name="sucursal" class="sucursal">
		        <option>Sucursal</option>
		        <option value="110467">Ker San Telmo</option>
		        <option value="73729">Ker Recoleta</option>
		        <option value="74787">Ker Belgrano</option>
		        <option value="73742">Ker Urquiza</option>
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
        
        
        <div class="bookingform" style="display:none;">
	    <div class="x">x</div>
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank">
	        <div class="checkin fecha dates">
		        <h1>CHECK IN</h1>
		        <h2 id="fecha1"><?php echo date('d');?></h2>
		        <h3><?php echo substr($str_meses[date('n')],0,3);?></h3>
	        </div>
	        <div class="checkout fecha dates">
		        <h1>CHECK OUT</h1>
		        <h2 id="fecha2"><?php echo date('d', strtotime($Date. ' + 1 days')); ?></h2>
		        <h3><?php echo substr($str_meses[date('n', strtotime($Date. ' + 1 days'))],0,3); ?></h3>
	        </div>
	        <div class="clear"></div>
	        <div class="">
		        <select name="Adults">
		        <option>Huespedes</option>
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
	        </select>
	        </div>
	        <div class="clear"></div>
	        <div class=""><input type="submit" value="BOOK NOW"></div>
	        <input type="hidden" id="desde2" name="DateIn" value="<?php echo date('m/d/Y'); ?>">
	        <input type="hidden" id="hasta2" name="DateOut" value="<?php echo date('m/d/Y', strtotime($Date. ' + 1 days')); ?>">
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div>
        
        </div>
        
        <div class="kerhoteles">
	        <div class="container">
	        <h1>Ker hoteles</h1>
	        <p>El Grupo KER es una empresa familiar con amplia experiencia en turismo y hotelería.<br>
A medida que sus integrantes se convirtieron en profesionales arquitectos y decoradores, el Grupo KER fue adquiriendo conocimiento y experiencia en otras áreas hasta el momento no exploradas y con el mismo espíritu de integración y crecimiento que los caracterizó desde un principio, se creó la cadena KER HOTELES, cuya filosofía conjuga experiencia, profesionalismo y vocación de servicio.</p>
	        </div>
        </div>
        
        <div class="hoteles">
	        <h1>Nuestras casas</h1>
	        
	        <div class="col-md-3 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
		        <a href="https://kersantelmo.com.ar/" target="_blank">
			    <img src="img/2/Home_Ker_San_Telmo_logo.png">
		        
		        </a>
	        </div>
	        
	        <div class="col-md-3 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <a href="http://kerrecoleta.com.ar" target="_blank">
			    <img src="img/2/Home_Ker_Recoleta_logo.png">
		        
		        </a>
	        </div>
	        
	        <div class="col-md-3 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <a href="http://kerbelgrano.com.ar" target="_blank">
			    <img src="img/2/Home_Ker_Belgrano_logo.png">
		        
		        </a>
	        </div>
	        
	        <div class="col-md-3 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
		        <a href="http://kerurquiza.com.ar" target="_blank">
			    <img src="img/2/Home_Ker_Urquiza_logo.png">
		        
		        </a>
	        </div>
	        
	        
	        
	        
	        
	        <div class="clear"></div>
        </div>
        
        
        <div class="casco" id="ubicacion">
	        <h1>Ubicaciones</h1>
	        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.656382393699!2d-58.37192468448255!3d-34.612849565488816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3352a931d341b%3A0x5bbc514285b71bea!2sKer%20San%20Telmo%20Hotel%20%26%20Events!5e0!3m2!1ses!2sar!4v1568675487092!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullsrceen=""></iframe>-->
	        <div id="map" style="width:100%; height:650px;"></div>
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
        <!--<srcipt type="text/javasrcipt">
    $('.modal').modal('show');
</srcipt>-->
<style>
	.modal-backdrop.in{opacity:0;}
	@media (max-width: 500px) {
	.modal-body{max-width:100%; height:400px!important; display:block; margin:auto;}
	.modal{width:100%!important;}
	}
</style>
<?php }?>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">
<script>
		$(document).ready(function() {
		$('.carousel1').slick({
			
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesTosrcoll: 1,
  autoplay: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesTosrcoll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesTosrcoll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesTosrcoll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZP6yzaAWn_WBu8KpRt7c3IutevT8c_oY" type="text/javascript"></script>

	<script type="text/javascript" src="js/gmaps-master/gmaps.js"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat: -34.613030,
        lng: -58.369680,
        zoom:12,
      });
      map.addMarker({
        lat: -34.555490,
        lng: -58.460600,
        title: 'Belgrano',
        infoWindow: {
          content: '<p>Ker Belgrano</p>'
        }
           });
      map.addMarker({
        lat: -34.597170,
        lng: -58.386560,
        title: 'Recoleta',
        infoWindow: {
          content: '<p>Ker Recoleta</p>'
        }
           });
      map.addMarker({
        lat: -34.613030,
        lng: -58.369680,
        title: 'San Telmo',
        infoWindow: {
          content: '<p>Ker San Telmo</p>'
        }
           });
      map.addMarker({
        lat: -34.573800,
        lng: -58.485480,
        title: 'Urquiza',
        infoWindow: {
          content: '<p>Ker Urquiza</p>'
        }
           });
    });
  </script>