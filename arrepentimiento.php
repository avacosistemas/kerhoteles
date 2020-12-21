<?php include("header.php");?>
    <div class="salones">
        <img src="img/2/arrepentimiento.jpg" alt="_KER_Salones_Banner" class="img-responsive" />
    </div>
    <div class="salones2">
        <div class="container">
            <p>Los artículos 34 de la Ley N° 24.240 y 1.110 del Código Civil y Comercial de la Nación establecen a favor del consumidor/usuario el derecho a solicitar la revocación de la aceptación del servicio contratado dentro del plazo de 10 días de efectuada la reserva.</p>
            <div class="habitaciones">
                <div class="blanco">
                        <div class="col-md-3">
                            <a href="https://reservations.travelclick.com/110467?confirmid=12345678&languageid=2" target="_blank">Arrepentimiento KER SAN TELMO</a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://reservations.travelclick.com/74787?confirmid=12345678&languageid=2" target="_blank">Arrepentimiento KER BELGRANO</a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://reservations.travelclick.com/73729?confirmid=12345678&languageid=2" target="_blank">Arrepentimiento KER RECOLETA</a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://reservations.travelclick.com/73742?confirmid=12345678&languageid=2" target="_blank">Arrepentimiento KER URQUIZA</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

        <!--<div class="habitaciones">
            <div class="blanco">
                <div class="col-md-2">
                    <a href="habitaciones_classic.php">Arrepentimiento KER SAN TELMO</a>
                </div>
                <div class="col-md-2">
                    <a href="habitaciones_classic.php">Arrepentimiento KER BELGRANO</a>
                </div>
                <div class="col-md-2">
                    <a href="habitaciones_classic.php">Arrepentimiento KER RECOLETA</a>
                </div>
                <div class="col-md-2">
                    <a href="habitaciones_classic.php">Arrepentimiento KER URQUIZA</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <br>-->

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
