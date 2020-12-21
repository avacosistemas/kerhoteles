<?php 
if(!isset($database_kerhistoric)){ include "access.php"; }

$colname_sliders = "-1"; if (isset($_GET['id'])) {$colname_sliders = intval($_GET['id']);}
$query_sliders = sprintf("SELECT * FROM sliders WHERE Id = %s", GetSQLValueString($colname_sliders, "int"));
$sliders = mysqli_query($kerhistoric, $query_sliders) or die(mysqli_error());
$row_sliders = mysqli_fetch_assoc($sliders);
$totalRows_sliders = mysqli_num_rows($sliders);
?>

<form action="procesos.php" enctype="multipart/form-data" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Foto: </td>
      <td>
      
      <?php if($row_sliders['foto_desktop']){ ?>
      <div id="foto"><img src="../img_sliders/<?php echo $row_sliders['foto_desktop']; ?>" width="100 ">
     
      <a href="javascript:del_imagen('foto','arch');" style="vertical-align:bottom;">
      	<i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i>
      </a><br />
      </div>    
      <?php } ?>       
      
      
      <input type="file" name="foto" size="32" /></td>
    </tr>
    <tr valign="baseline" style="displuay:none;">
      <td nowrap="nowrap" align="right">Foto mobile: </td>
      <td><?php if($row_sliders['foto_mobile']){ ?>
        <div id="foto2"><img src="../img_sliders/<?php echo $row_sliders['foto_mobile']; ?>" width="100 " /> <a href="javascript:del_imagen('foto_mobile','arch_mobile');" style="vertical-align:bottom;"> <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i> </a><br />
        </div>
        <?php } ?>
        <input type="file" name="foto_mobile" size="32" /></td>
    </tr>
    <!--
    <tr valign="baseline" style="displuay:none;">
      <td nowrap="nowrap" align="right">Texto:</td>
      <td><textarea name="texto" id="texto"><?php echo htmlentities($row_sliders['texto'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
    </tr>
    <tr valign="baseline" style="displuay:none;">
      <td nowrap="nowrap" align="right">Texto botón:</td>
      <td><textarea name="texto_boton" id="texto_boton"><?php echo htmlentities($row_sliders['texto_boton'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Link botón:</td>
      <td><input type="text" name="link" value="<?php echo htmlentities($row_sliders['link'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>-->
    <tr valign="baseline">
      <td colspan="2" align="center" nowrap="nowrap"><input type="submit" value="Modificar" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="sliders" />
  <input type="hidden" name="Id" value="<?php echo $row_sliders['Id']; ?>" />
  <input name="arch" type="hidden" id="arch" value="<?php echo htmlentities($row_sliders['foto_desktop'], ENT_COMPAT, 'utf-8'); ?>" />
  <input name="arch_mobile" type="hidden" id="arch_mobile" value="<?php echo htmlentities($row_sliders['foto_mobile'], ENT_COMPAT, 'utf-8'); ?>" />  
</form>
<?php mysqli_free_result($sliders); ?>