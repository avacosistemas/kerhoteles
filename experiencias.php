<?php include("header.php");

$query_experiencias = "SELECT * FROM experiencias order by orden";
$experiencias = mysqli_query($kerhistoric, $query_experiencias) or die(mysqli_error());
$row_experiencias = mysqli_fetch_assoc($experiencias);



$query_sliders = "SELECT * FROM sliders order by orden asc";
$sliders = mysqli_query($kerhistoric, $query_sliders) or die(mysqli_error());
$row_sliders = mysqli_fetch_assoc($sliders);
$totalRows_sliders = mysqli_num_rows($sliders);
?>
        
        
      				
      				
      				
      				
        
        
        <div class="hidden-xs" style="position:relative;">
        <img src="img/KER_Boton_Tax_free.jpg" class="tax" style="position:absolute; bottom:0; right:0; width:18%; z-index:99;">
        
        <ul class="bxslider2"><!-- slider -->
        
        <?php do{ ?>
		<li><img src="img_sliders/<?php echo $row_sliders['foto_desktop']; ?>"></li>
        <?php } while ($row_sliders = mysqli_fetch_assoc($sliders)); ?>
        
        
		</ul><!-- slider -->
		</div>
        
        
<?php 
$query_sliders = "SELECT * FROM sliders order by orden asc";
$sliders = mysqli_query($kerhistoric, $query_sliders) or die(mysqli_error());
$row_sliders = mysqli_fetch_assoc($sliders);
$totalRows_sliders = mysqli_num_rows($sliders);
?>        
        
		
		<div class="hidden-md hidden-lg hidden-sm" style="position:relative;">
			<img src="img/KER_Boton_Tax_free.jpg" class="tax" style="position:absolute; bottom:0; right:0; width:28%; z-index:99;">
		<ul class="bxslider"><!-- slider -->	
        <?php do{ ?>
		<li><img src="img_sliders/<?php echo $row_sliders['foto_mobile']; ?>"></li>
		<?php } while ($row_sliders = mysqli_fetch_assoc($sliders)); ?>
		</ul><!-- slider -->
        
        
		</div>
		
		<div class="botonreservar2 hidden-lg hidden-sm hidden-md">RESERVAR</div>
      				<div class="buscador2"><!--  -->
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank" id="formularioreserva">
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
	        <li class="item">
	        <select name="RoomTypeID">
		        <option>Tipo de habitación</option>
		        <option value="484905">Classic</option>
		        <option value="484906">Superior</option>
		        <option value="484907">Executive</option>
		        <option value="484908">Deluxe</option>
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
        <div class="covid" style="background-color:#A6A6A4; text-align:center; font-size:16px;"><a href="KER_Protocolo_Covid-19.pdf" target="_blank" style="color:#fff; display:block; padding:15px;">VER PROTOCOLO COVID-19 | Programa Stay Safe in Ker</a></div>
        
        <div class="promociones">
	        <div class="container">
		    
<?php if(mysqli_num_rows($experiencias)){ ?>   
<h1>KER SAN TELMO</span></h1>         
<?php $i=0; do{ $i++;?>            
		        <div class="col-md-4">
			        <img src="img_experiencias/<?php echo $row_experiencias['foto']; ?>" class="img-responsive" />
			        <a href="experiencias_detalle.php?id=<?php echo $row_experiencias['Id']; ?>">VER M&Aacute;S</a>
		        </div>
		        <?php if($i==3){echo '<div class="clear"></div>'; $i=0;}?>
<?php } while ($row_experiencias = mysqli_fetch_assoc($experiencias)); } ?>

	        </div>
        </div>
        
        

        
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




jQuery.fn.correo=function()
{
if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val()))
{
return true;
}
else
{
alert('Correo electronico no valido');
$(this).focus();
return false;
}
}


function newsletter(){
	
	
if($("#news").correo()){
$.get("news_add.php", { email: $('#news').get(0).value },
  function(data){
	$("#grx").show();
	$("#news").val('');
  });
} 
}


</script>
    </body>
</html>
