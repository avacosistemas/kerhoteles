<?php include("header.php");?>
    <div class="salones">
        <img src="img/arrepentimiento.jpg" alt="_KER_Salones_Banner" class="img-responsive" />
    </div>

    <div class="salones2">
        <div class="container">
			<h1>Pr&oacute;ximamente</h1>
            <p>Pr&oacute;ximamente nuevas promociones, consulta por las actuales en nuestro canal de WhatsApp
				<!--<a href="https://wa.me/5491130174497" target="_blank" class="hidden-md hidden-lg linkmobile"><i class="fa fa-whatsapp"></i> <b>Pr&oacute;ximamente nuevas promociones, consulta por las actuales en nuestro canal de WhatsApp +54 9 11 3017-4497</b></a>-->
				<a href="https://wa.me/5491130174497" target="_blank"><b>+54 9 11 3017-4497</b></a>
			</p>
            <div class="habitaciones">
                    <div class="clear"></div>
                </div>
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
