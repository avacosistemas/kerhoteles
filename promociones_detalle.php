<?php include("header.php");

$query_promociones = "SELECT * FROM promociones where Id = ".intval($_GET['id']);
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);


$query_promociones_texto = "SELECT * FROM promociones_mensajes where ID_PROMOCION = ".intval($_GET['id']). " order by orden";
$promociones_texto = mysqli_query($kerhistoric, $query_promociones_texto) or die(mysqli_error());
$row_promociones_texto = mysqli_fetch_assoc($promociones_texto);

?>
<?php if(mysqli_num_rows($promociones)){ ?>        
             
        <div class="hidden-xs">
        <ul class="bxslider2"><!-- slider -->
		<li><img src="img/_habitaciones/Banner_01.jpg"></li>
		<li><img src="img/_habitaciones/Banner_02.jpg"></li>
		<li><img src="img/_habitaciones/Banner_03.jpg"></li>
		</ul><!-- slider -->
		</div>
		
		<div class="hidden-md hidden-lg hidden-sm">
		<ul class="bxslider"><!-- slider -->	
		<li><img src="img/_habitaciones/Banner_01.jpg"></li>
		<li><img src="img/_habitaciones/Banner_02.jpg"></li>
		<li><img src="img/_habitaciones/Banner_03.jpg"></li>
		</ul><!-- slider -->
		</div>
			        
        <div class="habitaciones_detalle">
	        <div class="container">
		        <div class="col-md-12"><h1><?php echo $row_promociones['titulo'.$lengua]; ?></h1></div>
	        <div class="col-md-8 borde">
		        <div class="item"><img src="img_promociones/2021/<?php echo $row_promociones['foto_detalle']; ?>" alt="Classic_00" class="img-responsive"></div>
			        
		        <p style="padding-top:21px;">
			       <?php echo smrFormatStr($row_promociones['texto'.$lengua]); ?>
		        </p>
	        </div>

	        <div class="col-md-4">

                	
				    
					 <?php if ($_GET['id'] == 1) { ?>
					<div class="buscador_detalle fondodetalle">					
					<h3 style="text-align: center;">RESERVAR</span>
					  <a href="https://reservations.travelclick.com/110467?DateIn=&DateOut=&Adults=Huespedes&languageid=2#/guestsandrooms" target="_blank"><input class="btn btn-sm colored" type="submit" value="Ker San Telmo" style="margin: 35px 0px 10px 0px" ></a>
					  <a href="https://reservations.travelclick.com/73729?DateIn=&DateOut=&Adults=Huespedes&languageid=2#/guestsandrooms" target="_blank"><input class="btn btn-sm colored" type="submit" value="Ker Recoleta" style="margin: 15px 0px 10px 0px" ></a>
					  <a href="https://reservations.travelclick.com/74787?DateIn=&DateOut=&Adults=Huespedes&languageid=2#/guestsandrooms" target="_blank"><input class="btn btn-sm colored" type="submit" value="Ker Belgrano" style="margin: 15px 0px 10px 0px" ></a>
					  <a href="https://reservations.travelclick.com/73742?DateIn=&DateOut=&Adults=Huespedes&languageid=2#/guestsandrooms" target="_blank"><input class="btn btn-sm colored" type="submit" value="Ker Urquiza" style="margin: 15px 0px 0px 0px" ></a>		
	                </div>
	            	
			
	            <?php } else { ?>
				<div class="buscador_detalle fondodetalle">
					<h3 style="text-align: center;">Tarifas</span>
					<br>
					<br>	
					<?php if(mysqli_num_rows($promociones_texto)){ ?>            
					<?php $i=0; do{ $i++;?>        
<div class="buscador_detalle fondodetalle" >					
							<?php echo $row_promociones_texto['hotel']; ?> <H5><?php echo $row_promociones_texto['mensaje']; ?>
<br>							
<a href="<?php echo $row_promociones_texto['mensaje_wsp']; ?>" target="_blank"><b><?php echo $row_promociones_texto['mensaje_celular']; ?></b></a></H5>	
</div>							
								<br>							
					<?php } while ($row_promociones_texto = mysqli_fetch_assoc($promociones_texto)); } ?>	
    					</h3>
						<?php } ?>	         
				 </div>

	    </div>
	    <div class="clear"></div>
	    </div>	        
    </div>
        


		   
<?php         
$query_promociones = "SELECT * FROM promociones where Id != '".intval($_GET['id'])."' order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);        
?>        
<?php if(mysqli_num_rows($promociones)){ ?>   
      
        <div class="promociones">
	        <div class="container">
		        <div class="promotitulo">M&Aacute;S PROMOCIONES</div>
<?php do{ ?>            
		        <div class="col-md-4 bordeimagen">
					<a href="promociones_detalle.php?id=<?php echo $row_promociones['Id']; ?>" class="bordeimagen"><img src="img_promociones/2021/<?php echo $row_promociones['foto']; ?>" class="img-responsive"></a>
			        <a href="promociones_detalle.php?id=<?php echo $row_promociones['Id']; ?>">VER M&Aacute;S</a>
		        </div>
<?php } while ($row_promociones = mysqli_fetch_assoc($promociones));  ?>
	        </div>
        </div>
        
        
<?php } ?>        
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
<?php } ?>