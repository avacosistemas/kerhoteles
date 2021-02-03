<?php require_once('Connections/kerhistoric.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ker Hoteles - tu lugar en Buenos Aires para sentirte como en casa.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="Favicon.jpg" type="image/x-icon">
		<link rel="icon" href="Favicon.jpg" type="image/x-icon">
		<meta name="description" content="La filosofía de cadena Ker Hoteles conjuga experiencia, profesionalismo y vocación de servicio. El Grupo KER es una empresa familiar con amplia experiencia en turismo y hotelería para que en Buenos Aires te sientas como en casa.">
        <meta name="keywords" content="ker, hotel, hoteles, centric, urban, house, historic, buenos aires, hospedaje, turismo, recoleta, villa urquiza, belgrano, san telmo, promociones, argentina, salones, congresos, eventos, spa, armonía, health club, restaurante, citrino, halo, reservas, check in, ker hoteles">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://grandview.com.ar/css/lib/jquery-ui.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="js/nice-select.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-0NLFJHS9N7"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'G-0NLFJHS9N7');
		</script>

        <!-- Global site tag (gtag.js) - Google Ads: 465890687 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-465890687"></script>
        	<script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                  gtag('config', 'AW-465890687');
        	</script>
        
	<!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '823360734875729');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1"
                 src="https://www.facebook.com/tr?id=823360734875729&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

		        		<!-- estilo de Botón de Wsp -->
						<style>
        .btn-whatsapp {
			position: fixed;
   			width: 45px;
    		height: 45px;
    		line-height: 45px;
    		bottom: 30px;
    		left: 30px;
    		border-radius: 55px;
    		box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.2);
			z-index: 100;
		}

		.btn-whatsapp:hover {
  			text-decoration: none;
    		box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.4);
		}
    </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <header>
	        <div class="iconomobile">
			        <div id="nav-icon1" class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					</div>
		        </div>
	        <div class="col-md-3 logo">
		        <a href="index.php"><img src="img/KER_Website_LogoHEADER.svg"></a>
	        </div>
	        <div class="col-md-6">
		        <div class="menu1">
		        <ul class="menu">
			        <li><a href="promociones.php">PROMOCIONES</a></li>
			        <!--<li><a href="experiencias.php">EXPERIENCIAS</a></li>-->
			        <li><a href="index.php#ubicacion">UBICACI&Oacute;N</a></li>
			        <li class="linkreservas"><a href="javascript:void();">RESERVAS</a>
			        	<div class="submenu" id="menureservas">
				        	<a href="https://reservations.travelclick.com/110467?DateIn=&DateOut=&Adults=Huespedes&languageid=2#/guestsandrooms" target="_blank">Ker San Telmo</a>
				        	<a href="https://reservations.travelclick.com/73729?languageId=ES_ES&dateIn=&dateOut=#/guestsandrooms" target="_blank">Ker Recoleta</a>
				        	<a href="https://reservations.travelclick.com/74787?languageId=ES_ES&dateIn=&dateOut=" target="_blank">Ker Belgrano</a>
				        	<a href="https://reservations.travelclick.com/73742?languageId=ES_ES&dateIn=&dateOut=" target="_blank">Ker Urquiza</a>
			        	</div>
			        </li>
			        <li><a href="contacto.php">CONTACTO</a></li>
		        </ul>
		        <ul class="menu">
			        <li class="linkhoteles"><a href="javascript:void();">HOTELES</a>
			        	<div class="submenu" id="menuhoteles">
				        	<a href="https://kersantelmo.com.ar/" target="_blank">Ker San Telmo</a>
				        	<a href="http://kerrecoleta.com.ar/" target="_blank">Ker Recoleta</a>
				        	<a href="http://kerbelgrano.com.ar/" target="_blank">Ker Belgrano</a>
				        	<a href="http://kerurquiza.com.ar/" target="_blank">Ker Urquiza</a>
			        	</div>
			        </li>
			        <li class="linkrestaurantes"><a href="javascript:void();">RESTAURANTES</a>
			        	<div class="submenu" id="menurestaurantes">
				        	<a href="http://kerrecoleta.com.ar/kerrecoleta-main/citrino.php" target="_blank">Citrino</a>
				        	<a href="https://www.kersantelmo.com.ar/halo.php" target="_blank">Halo</a>
			        	</div>
			        </li>
			        <li><a href="salones.php">EVENTOS</a></li>
			        <li><a href="spa.php">SPA</a></li>
			        <li><a href="#">ES</a></li>
			        <li><a href="#">EN</a></li>
			        <a href="tel:08103456537" class="hidden-md hidden-lg linkmobile"><i class="fa fa-phone"></i> 0810-3456-537</a>
			        <a href="https://wa.me/5491130174497" target="_blank" class="hidden-md hidden-lg linkmobile"><i class="fa fa-whatsapp"></i> RESERVAS 11 3017-4497</a>
					<a href="https://wa.me/5491130174497" target="_blank" class="hidden-md hidden-lg linkmobile"><i class="fa fa-whatsapp"></i> CORPORATIVO 11 3046-5697</a>
					<div class="redesmobile hidden-md hidden-lg">
			        <li><a href="https://www.facebook.com/hotelesker/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Facebook.svg"></a></li>
			        <li><a href="https://www.instagram.com/kerhoteles" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Instagram.svg"></a></li>
			        <li><a href="https://www.linkedin.com/company/ker-hoteles/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Linkedin.svg"></a></li>
					</div>
		        </ul>
		        </div>
	        </div>
	        <div class="col-md-3 col3">
		        <ul class="redes">
			        <li><a href="https://www.facebook.com/hotelesker/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Facebook.svg"></a></li>
			        <li><a href="https://www.instagram.com/kerhoteles" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Instagram.svg"></a></li>
			        <li><a href="https://www.linkedin.com/company/ker-hoteles/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Linkedin.svg"></a></li>
		        </ul>
		        <a href="tel:08103456537" class="iconotel">0810-3456-537</a><br>
		        <a href="https://wa.me/5491130174497" class="iconowhat" target="_blank">RESERVAS 11 3017-4497</a>
		        <a href="https://wa.me/5491130465697" class="iconowhat2" target="_blank">CORPORATIVO 11 3046-5697</a>
	        </div>
        </header>