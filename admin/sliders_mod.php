<?php 
if(!isset($database_kerhistoric)){ include "access.php"; }

$query_sliders = "SELECT * FROM sliders order by orden asc";
$sliders = mysqli_query($kerhistoric, $query_sliders) or die(mysqli_error());
$row_sliders = mysqli_fetch_assoc($sliders);
$totalRows_sliders = mysqli_num_rows($sliders);
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
  </script>

<?php
if($totalRows_sliders>1){ 
 $tabla = 'sliders'; include "ordenar.php"; 
}
?> 
<a href="admin.php?p=sliders_mod2" class="agregar">A&ntilde;adir </a>
<?php if($totalRows_sliders!=0){ ?>
<table width="100%" class="footable" id="table-1"  data-filter="#filter">
<thead>

   <tr>
    <th width="82%" data-sort-ignore="true">&nbsp;</th>
    <th width="4%" data-sort-ignore="true">Modificar</th>
    <th width="4%" data-sort-ignore="true">Eliminar</th>
  </tr>
   </thead><tbody>

  <?php do { ?>
    <tr id="<?php echo $row_sliders['Id']; ?>">
      <td style="padding-left:20px;" >
      <?php if($row_sliders['foto_desktop']){ ?>
      <img src="../img_sliders/<?php echo $row_sliders['foto_desktop']; ?>" width="100" />
      <?php } ?>
      </td>
      <td align="center"><a href="admin.php?p=sliders_mod2&amp;id=<?php echo $row_sliders['Id']; ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
      <td align="center"><a href="javascript:borrar_ajax(<?php echo $row_sliders['Id']; ?>,'sliders')"><i class="fa fa-trash-o fa-2x"></i></a></td>
    </tr>
    <?php } while ($row_sliders = mysqli_fetch_assoc($sliders)); ?>
            </tbody>
    
     <tfoot class="footable-pagination">
        <tr>
          <td colspan="4">&nbsp;</td>
        </tr>
      </tfoot>

</table>

<?php 
} else {echo 'NO HAY DATOS';}
mysqli_free_result($sliders); ?>