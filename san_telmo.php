<?php 
$hostname_kerhistoric = "45.173.0.85:3306";
$database_kerhistoric = "kerhistoric_2019";
$username_kerhistoric = "ker_2019";
$password_kerhistoric = "4&Qh0g3a";
$kerhistoric = mysqli_connect($hostname_kerhistoric, $username_kerhistoric, $password_kerhistoric);

mysqli_select_db($kerhistoric, $database_kerhistoric);


$query_promociones = "SELECT * FROM promociones where publicado = 'Y' order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones); 
?>        
        
        <div class="promociones">
	        <div class="container">
		        <h1>KER SAN TELMO</h1>
<?php if(mysqli_num_rows($promociones)){ ?>            
<?php $i=0; do{ $i++;?>            
		        <div class="col-md-4">
			        <img src="https://kersantelmo.com.ar/img_promociones/<?php echo $row_promociones['foto']; ?>" class="img-responsive" />
			        <?php if($row_promociones['link']!=''){?>
			        <a href="<?php echo $row_promociones['link']; ?>" target="_blank">VER M&Aacute;S</a>
			        <?php } else {?>
			        <a href="https://kersantelmo.com.ar/promociones_detalle.php?id=<?php echo $row_promociones['Id']; ?>">VER M&Aacute;S</a>
			        <?php } ?>
		        </div>
		        <?php if($i==3){echo '<div class="clear"></div>'; $i=0;}?>
<?php } while ($row_promociones = mysqli_fetch_assoc($promociones)); } ?>

	        </div>
        </div>