<?php 
if(!isset($database_kerhistoric)){ include "access.php"; }

$query_promociones = "SELECT * FROM promociones order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);
$totalRows_promociones = mysqli_num_rows($promociones);
?>

  <link href="css/footable-0.1.css" rel="stylesheet" type="text/css" />
  <link href="css/footable.sortable-0.1.css" rel="stylesheet" type="text/css" />
  <link href="css/footable.paginate.css" rel="stylesheet" type="text/css" />
  

  <script src="js/footable.js" type="text/javascript"></script>
  <script src="js/footable.sortable.js" type="text/javascript"></script>
  <script src="js/footable.filter.js" type="text/javascript"></script>
  <script src="js/footable.paginate.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(function() {
      $('table').footable();
    });
	
	
	
	$(document).ready(function() {
	
$(".dest").change(function(){
		var c = '';
		if($(this).is(" :checked")){
			c='Y';
		} else {
			c='N';			
		}
		var id = $(this).attr('rel');
		
$.get("destacado.php", { destacado: c, id:id },
  function(data){

  });
});

	});
	
  </script>

<?php
if($totalRows_promociones>1){ 
 $tabla = 'promociones'; include "ordenar.php"; 
}
?> 
<a href="admin.php?p=promociones_mod2" class="agregar">A&ntilde;adir</a>
<?php if($totalRows_promociones!=0){ ?>
<table  data-filter="#filter" id="table-1" class="footable">
<thead>

   <tr>
     <th width="13%" data-sort-ignore="true">Destacado home</th>
     <th width="13%" data-sort-ignore="true">&nbsp;</th>
    <th width="77%" data-sort-ignore="true">&nbsp;</th>
    <th width="5%" data-sort-ignore="true">Modificar</th>
    <th width="5%" data-sort-ignore="true">Eliminar</th>
  </tr>
   </thead><tbody>

  <?php do { ?>
    <tr id="<?php echo $row_promociones['Id']; ?>">
      <td style="padding-left:20px;" ><input class="dest" type="checkbox" name="dest" rel="<?php echo $row_promociones['Id']; ?>" <?php if($row_promociones['destacado_home']=='Y'){ echo ' checked '; } ?>></td>
      <td style="padding-left:20px;" ><?php echo $row_promociones['titulo_esp']; ?></td>
      <td style="padding-left:20px;" >
      <?php if($row_promociones['foto']){ ?>
      <img src="../img_promociones/<?php echo $row_promociones['foto']; ?>" width="100" />
      <?php } ?>
      </td>
      <td align="center"><a href="admin.php?p=promociones_mod2&amp;id=<?php echo $row_promociones['Id']; ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
      <td align="center"><a href="javascript:borrar_ajax(<?php echo $row_promociones['Id']; ?>,'promociones')"><i class="fa fa-trash-o fa-2x"></i></a></td>
    </tr>
    <?php } while ($row_promociones = mysqli_fetch_assoc($promociones)); ?>
            </tbody>
    
     <tfoot class="footable-pagination">
        <tr>
          <td colspan="5"><ul id="pagination" class="footable-nav" /></td>
        </tr>
      </tfoot>

</table>

<?php 
} else {echo 'NO HAY DATOS';}
mysqli_free_result($promociones); ?>