<?php 
if(!isset($database_kerhistoric)){ include "access.php"; }

$query_usuarios = "SELECT * FROM usuarios where Id > 1 ";
$usuarios = mysqli_query($kerhistoric, $query_usuarios) or die(mysqli_error());
$row_usuarios = mysqli_fetch_assoc($usuarios);
$totalRows_usuarios = mysqli_num_rows($usuarios);
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
if($totalRows_usuarios>1){ 
 $tabla = 'usuarios'; include "ordenar.php"; 
}
?> 
<a href="admin.php?p=usuarios_add" class="agregar">A&ntilde;adir</a>
<?php if($totalRows_usuarios!=0){ ?>
<table  data-filter="#filter" id="table-1" class="footable">
<thead>

   <tr>
    <th width="87%" data-sort-ignore="true">&nbsp;</th>
    <th width="7%" data-sort-ignore="true">Modificar</th>
    <th width="6%" data-sort-ignore="true">Eliminar</th>
  </tr>
   </thead><tbody>

  <?php do { ?>
    <tr id="<?php echo $row_usuarios['Id']; ?>">
      <td style="padding-left:20px;" >
      <?php echo $row_usuarios['user']; ?>
      </td>
      <td align="center"><a href="admin.php?p=usuarios_mod2&amp;id=<?php echo $row_usuarios['Id']; ?>"><i class="fa fa-pencil fa-2x"></i></a></td>
      <td align="center"><a href="javascript:borrar_ajax(<?php echo $row_usuarios['Id']; ?>,'usuarios')"><i class="fa fa-trash-o fa-2x"></i></a></td>
    </tr>
    <?php } while ($row_usuarios = mysqli_fetch_assoc($usuarios)); ?>
            </tbody>
    
     <tfoot class="footable-pagination">
        <tr>
          <td colspan="3"><ul id="pagination" class="footable-nav" /></td>
        </tr>
      </tfoot>

</table>

<?php 
} else {echo 'NO HAY DATOS';}
mysqli_free_result($usuarios); ?>