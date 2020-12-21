<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="salones">
	       <img src="img/2/eventos_header.jpg" alt="_KER_Salones_Banner" class="img-responsive" />
	       <div class="col-md-6">
		       <img src="img/05_EVENTOS/KER_WebHoteles_EVENTOS_01.jpg" alt="KER_Salones_img_01" class="img-responsive" />
	       </div>
	       <div class="col-md-6">
		       <h1>Meetings and more</h1>
		       <p>En Ker Hoteles contamos con salones que se adaptan
 a lo que requiera tu evento.<br>
Conocé las diferentes capacidades y disposiciones
 que tenemos para ofrecerte.</p>
 			<ul>
	 			<li><img src="img/KER_Salones/KER_HOTELES_SALONES_WEB/KER_HOTELES_SALONES_WEB_icono_corporativo.png"><span>CORPORATIVOS</span></li>
	 			<li><img src="img/KER_Salones/KER_HOTELES_SALONES_WEB/KER_HOTELES_SALONES_WEB_icono_social.png"><span>SOCIALES</span></li>
 			</ul>
 			<a href="contacto.php?tipo=Salones Cotizacion#contacto">CONSULT&Aacute;</a>
	       </div>
	       <div class="clear"></div>
	       
       </div>
        
        <div class="salones2">
	        <div class="container">
		        <h1>Eventos Corporativos</h1>
		        <p>Para el segmento corporativo los salones cuentan con excelente conexión wifi, proyector, pantalla y la versatilidad para adaptarse a distintas capacidades y armados para efectuar reuniones, capacitaciones, desayunos de trabajo, presentaciones de producto, conferencias.</p>
		        <h1>Eventos Sociales</h1>
		        <p>Para eventos sociales ofrecemos espacios multifuncionales e íntimos para celebrar bautismos, bodas, aniversarios, cumpleaños de 15, bar y bat Mitzvah y todos aquellos momentos que nunca dejarán de ser los más especiales e inolvidables.<br><br>

Para hacer de la planificación de la celebración un proceso emocionante y totalmente especial
e inolvidable, Ker Hoteles dispone de un experimentado equipo en organización de eventos.<br><br>

Agasajá a tus invitados con lo mejor de nuestro catering.<br>
Tenemos mucho para ofrecerte.<br>
Consultanos para reservar tu evento en Ker Hoteles.

		        </p>
	        </div>
        </div>
        
        <div class="fotos">
		       <img src="img/2/eventos_1.jpg" alt="KER_WebHoteles_EVENTOS_02" class="img-responsive" />
		       <img src="img/2/eventos_2.jpg" alt="KER_WebHoteles_EVENTOS_02" class="img-responsive" />
		       <img src="img/2/eventos_3.jpg" alt="KER_WebHoteles_EVENTOS_02" class="img-responsive" />
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
</script>
    </body>
</html>
