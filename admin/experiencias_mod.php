<?php 
if(!isset($database_kerhistoric)){ include "access.php"; }

$query_experiencias = "SELECT * FROM experiencias order by orden";
$experiencias = mysqli_query($kerhistoric, $query_experiencias) or die(mysqli_error());
$row_experiencias = mysqli_fetch_assoc($experiencias);
$totalRows_experiencias = mysqli_num_rows($experiencias);
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
		
$.get("destacado_experiencias.php", { destacado: c, id:id },
  function(data){

  });
});

	});
	
  </script>

<?php
if($totalRows_experiencias>1){ 
 $tabla = 'experiencias'; include "ordenar.php"; 
}
?> 
<a href="admin.php?p=experiencias_mod2" class="agregar">A&ntilde;adir</a>
<?php if($totalRows_experiencias!=0){ ?>
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
    <tr id="<?php echo $row_experiencias['Id']; ?>">
      <td style="padding-left:20px;" ><input class="dest" type="checkbox" name="dest" rel="<?php echo $row_experiencias['Id']; ?>" <?php if($row_experiencias['destacado_home']=='Y'){ echo ' checked '; } ?>></td>
      <td style="padding-left:20px;" ><?php echo $row_experiencias['titulo_esp']; ?></td>
      <td style="padding-left:20px;" >
      <?php if($row_experiencias['foto']){ ?>
      <img src="../img_experiencias/<?php echo $row_experiencias['foto']; ?>" width="100" />
      <?php } ?>
      </td>
      <td align="center"><a href="admin.php?p=experiencias_mod2&amp;id=<?php echo $row_experiencias['Id']; ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
      <td align="center"><a href="javascript:borrar_ajax(<?php echo $row_experiencias['Id']; ?>,'experiencias')"><i class="fa fa-trash-o fa-2x"></i></a></td>
    </tr>
    <?php } while ($row_experiencias = mysqli_fetch_assoc($experiencias)); ?>
            </tbody>
    
     <tfoot class="footable-pagination">
        <tr>
          <td colspan="5"><ul id="pagination" class="footable-nav" /></td>
        </tr>
      </tfoot>

</table>

<?php 
} else {echo 'NO HAY DATOS';}
mysqli_free_result($experiencias); ?>