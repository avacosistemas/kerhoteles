<?php 
$hostname_kerhistoric = "localhost:3306";
$database_kerhistoric = "kerurquiza_2020";
$username_kerhistoric = "urquiza";
$password_kerhistoric = "7uj4Lq9?";
$kerhistoric = mysqli_connect($hostname_kerhistoric, $username_kerhistoric, $password_kerhistoric);

mysqli_select_db($kerhistoric, $database_kerhistoric);


$query_promociones = "SELECT * FROM promociones where publicado = 'Y' order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones); 
?>        
        
        <div class="promociones">
	        <div class="container">
		        <h1>KER URQUIZA</h1>
<?php if(mysqli_num_rows($promociones)){ ?>            
<?php $i=0; do{ $i++;?>            
		        <div class="col-md-4">
			        <img src="https://kerurquiza.com.ar/img_promociones/<?php echo $row_promociones['foto']; ?>" class="img-responsive" />
			        <?php if($row_promociones['link']!=''){?>
			        <a href="<?php echo $row_promociones['link']; ?>" target="_blank">VER M&Aacute;S</a>
			        <?php } else {?>
			        <a href="https://kerurquiza.com.ar/promociones_detalle.php?id=<?php echo $row_promociones['Id']; ?>">VER M&Aacute;S</a>
			        <?php } ?>
		        </div>
		        <?php if($i==3){echo '<div class="clear"></div>'; $i=0;}?>
<?php } while ($row_promociones = mysqli_fetch_assoc($promociones)); } ?>

	        </div>
        </div>