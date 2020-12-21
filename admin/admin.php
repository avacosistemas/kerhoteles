	<?php
include "access.php";
if(!isset($_GET['p'])){$inc='home';}else{$inc=escape($_GET['p']);}
include("titulos.php");
/*------ ESTILOS ----*/
$bgcolor='#1C1C1C';
$class='blanco';
?>
<!DOCTYPE html>
<html>
    <head>
             <title>Kerhistoric</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

        <!-- Bootstrap Admin Theme -->
        <link href="css/bootstrap-admin-theme.css" rel="stylesheet" media="screen">
		<link rel="icon" href="https://kerhistoric.com.ar/favicon.png">
        <!-- Datatables -->
        <link href="css/DT_bootstrap.css" rel="stylesheet" media="screen">

        <link href="vendors/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" media="screen">
        <link href="css/datepicker.fixes.css" rel="stylesheet" media="screen">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="estilos.css?<?php echo date('Hns'); ?>" rel="stylesheet" media="screen">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->



        <script type="text/javascript" src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
       <!--  <script type="text/javascript" src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>-->
        <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>



        <script type="text/javascript" src="vendors/ckeditor/ckeditor.js"></script>
        <script src="vendors/ckeditor/adapters/jquery.js"></script>
       <!-- <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
        <script type="text/javascript" src="vendors/chosen.jquery.min.js"></script>-->
        <script type="text/javascript" src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
      <!--  <script type="text/javascript" src="vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3.js"></script>
        <script type="text/javascript" src="vendors/boostrap3-typeahead/bootstrap3-typeahead.min.js"></script>-->
        
        <script type="text/JavaScript">
		var e='0';
$(document).ready(function() {
	
	$('.x<?php echo substr($inc,0,strrpos($inc, '_')); ?>').addClass('active');
	
	var c =  $('.x<?php echo substr($inc,0,strrpos($inc, '_')); ?>').find('a').first().text();
	if(c!=''){
		$("#cabecera").html(c);		
		$("#cabecera_contenedor").show();
	}

	$("input[type=submit]").after('<img id="lder" src="imagenes/ajax-loader.gif" style="display:none;" />');
	
	$('#form1').submit(function() {
		$("#lder").show();
		$("input[type=submit]").hide();
		$("#volver").hide();
		setTimeout(function(){ $("#lder").hide(); $("input[type=submit]").show();}, 5000);
		
	
});
	
	
 });
</script>
     

    </head>
    <body>
    
    <!--  -->
    <header class="cd-main-header">
		<a href="admin.php" class="cd-logo" style="text-align:left; background-color:black;" ><img src="../img/01Home/Ker_Historic_SanTelmo_BsAs_Logo_Header.svg" width="90" alt="Logo"></a>
		
		<!--<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div>--> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger"><span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<!--<li><a href="#0">Tour</a></li>
				<li><a href="#0">Support</a></li>-->
				<li class="has-children account">
					<a href="#0" id="linkclick">
						<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						Mi cuenta
					</a>

					<ul>

						<li><a href="admin.php?p=usuarios_mod">Usuarios</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->
	<!--  -->
	
	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">kerhistoric</li>
				<a href="../index.php" target="_blank" style="text-align:left; padding-left:18px;">IR AL SITIO</a>
				
                
                                                  				
								<li class="has-children images">
					<a href="#">Contactos</a>
					
					<ul>
                 
						<li><a href="admin.php?p=contactos_mod&tipo=contacto">Contactos</a></li>
						<li><a href="admin.php?p=contactos_mod&tipo=promocion">Promociones</a></li>
						<li><a href="admin.php?p=contactos_mod&tipo=experiencia">Experiencias</a></li>                         
						<li><a href="admin.php?p=contactos_mod&tipo=newsletter">Newsletter</a></li>                                                
						<li><a href="admin.php?p=contactos_mod&tipo=halo reserva">Halo reserva</a></li>                                                                        
						<li><a href="admin.php?p=contactos_mod&tipo=spa">SPA</a></li>                                                                        
						<li><a href="admin.php?p=contactos_mod&tipo=Salones Cotizacion">Salones Cotizacion</a></li>                                                                                                                        
						<li><a href="admin.php?p=contactos_mod&tipo=General">Todos</a></li>                                                                        
					</ul>
				</li>  
                
                
                                                  				
					<li class="has-children images">
					<a href="admin.php?p=promociones_mod">Promociones</a>
					
					<ul>
						<li><a href="admin.php?p=promociones_mod2">Agregar</a></li>                 
						<li><a href="admin.php?p=promociones_mod">Listar</a></li>
					</ul>
                    </li>

					<li class="has-children images">
					<a href="admin.php?p=experiencias_mod">Experiencias</a>
					<ul>
						<li><a href="admin.php?p=experiencias_mod2">Agregar</a></li>                 
						<li><a href="admin.php?p=experiencias_mod">Listar</a></li>
					</ul>
                    </li>

                    
								<li class="has-children images">
					<a href="admin.php?p=sliders_mod">Sliders promociones</a>
					
					<ul>
						<li><a href="admin.php?p=sliders_mod2">Agregar</a></li>                 
						<li><a href="admin.php?p=sliders_mod">Listar</a></li>
					</ul>                    
                    
				</li> 
                
				<li class="has-children images">
					<a href="admin.php?p=menues_mod2">Menu</a>
				</li>                 
                                 

			</ul>


		</nav>

		<div class="content-wrapper">
			<?php 
			if($inc!='home'){
				$g = strpos($inc,'_');
				echo '<div class="tituloseccion">Sección: <span>'.ucfirst ( substr($inc,0,$g)).'</span></div> ';			
			}
			
			
			
         if(isset($_GET['success'])){ ?>
                           <div class="alert alert-success">
                           <a class="close" data-dismiss="alert" href="#">&times;</a>
                                    Los datos se grabaron correctamente
                           </div>
		<?php }   			
			
			
			
			if(!@include('./'.$inc.".php")){echo '<br>404 Página no encontrada';} ?> 
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
    
        
    </body>
</html>

   <script>
 $(document).ready(function(){
  $(".footable-page").click(function(){
	 e = $(this).find("a").attr('data-page');
//	 alert(e);
	 ex();
  });
 });
 
function ex(){
$.get("graba_page.php", { e: e, inc: inc },
  function(data){
    //alert(data);
  });
 }
 
	
 
 </script>

 
<script src="responsive-sidebar-navigation-master/js/modernizr.js"></script> <!-- Modernizr --> 
<script src="responsive-sidebar-navigation-master/js/jquery.menu-aim.js"></script>
<script src="responsive-sidebar-navigation-master/js/main.js"></script> <!-- Resource jQuery -->
<link rel="stylesheet" href="responsive-sidebar-navigation-master/css/style.css"> <!-- Resource style -->
<script src="funciones.js" type="text/javascript"></script>


  
<?php  mysqli_close($kerhistoric); ?>