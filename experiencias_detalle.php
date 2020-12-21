<?php include("header.php");

$query_experiencias = "SELECT * FROM experiencias where Id = ".intval($_GET['id']);
$experiencias = mysqli_query($kerhistoric, $query_experiencias) or die(mysqli_error());
$row_experiencias = mysqli_fetch_assoc($experiencias);

?>
<?php if(mysqli_num_rows($experiencias)){ ?>        
        
      				
      				
      				
      				
        
        
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
		        <div class="col-md-12"><h1><?php echo $row_experiencias['titulo'.$lengua]; ?></h1></div>
	        <div class="col-md-8 borde">
		        <div class="item"><img src="img_experiencias/<?php echo $row_experiencias['foto_detalle']; ?>" alt="Classic_00" class="img-responsive"></div>
			        
		        <p style="padding-top:21px;">
			       <?php echo smrFormatStr($row_experiencias['texto'.$lengua]); ?>
		        </p>
	        </div>
	        <div class="col-md-4">
		        
		        <div class="buscador_detalle"><!--  -->
		        <h3>CONSULTAR</span>
        <form action="enviar_experiencia.php" method="post">
	        <input type="text" required name="nombre" placeholder="Nombre" style="background-image:none;">
	        <input type="text" placeholder="Teléfono" name="tel" required>
	        <input type="email" required name="email" placeholder="E-mail">
	        <textarea rows="6" placeholder="Mensaje" name="mensaje" ></textarea>
	        <input type="submit" value="ENVIAR">
          <input type="hidden" name="experiencia" value="<?php echo $row_experiencias['titulo'.$lengua]; ?>" id="hiddenField" />
          <input type="hidden" name="eml" value="<?php echo $row_experiencias['Id']; ?>" id="hiddenField" />          
        </form>
        </div><!--  -->
	        </div>
	        <div class="clear"></div>
	        </div>
	        
        </div>
        
        
<?php         
$query_experiencias = "SELECT * FROM experiencias where Id != '".intval($_GET['id'])."' order by orden";
$experiencias = mysqli_query($kerhistoric, $query_experiencias) or die(mysqli_error());
$row_experiencias = mysqli_fetch_assoc($experiencias);        
?>        
<?php if(mysqli_num_rows($experiencias)){ ?>   
      
        <div class="experiencias">
	        <div class="container">
		        <div class="promotitulo">M&Aacute;S experienciaS</div>
<?php do{ ?>            
		        <div class="col-md-4">
			        <img src="img_experiencias/<?php echo $row_experiencias['foto']; ?>" class="img-responsive" />
			        <a href="experiencias_detalle.php?id=<?php echo $row_experiencias['Id']; ?>">VER M&Aacute;S</a>
		        </div>
<?php } while ($row_experiencias = mysqli_fetch_assoc($experiencias));  ?>
	        </div>
        </div>
        
        
<?php } ?>        
        
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
