<?php 
$query_menues = "SELECT * FROM menues WHERE Id = 1";
$menues = mysqli_query($kerhistoric, $query_menues ) or die(mysqli_error());
$row_menues = mysqli_fetch_assoc($menues);
$totalRows_menues = mysqli_num_rows($menues);
?>

<form action="procesos.php"   enctype="multipart/form-data" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Menu:</td>
      <td>
      
 		<?php if($row_menues['menu']){ ?>
        <div id="menu">
        	<a href="../img_menues/<?php echo $row_menues['menu']; ?>" target="_blank"><?php echo $row_menues['menu']; ?></a>
            <a href="javascript:del_imagen('menu','arch1');" style="vertical-align:bottom;"> 
            <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a>
            <br />
        </div>
        <?php } ?>        
      
      
      
      <input type="file" name="menu" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Menu ejecutivo:</td>
      <td>
 		<?php if($row_menues['menu_ejecutivo']){ ?>
        <div id="menu1">
        	<a href="../img_menues/<?php echo $row_menues['menu_ejecutivo']; ?>" target="_blank"><?php echo $row_menues['menu_ejecutivo']; ?></a>
            <a href="javascript:del_imagen('menu1','arch2');" style="vertical-align:bottom;"> 
            <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a>
            <br />
        </div>
        <?php } ?>           
      
      <input type="file" name="menu_ejecutivo" value="<?php echo htmlentities($row_menues['menu_ejecutivo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Menu halo bar:</td>
      <td>
 		<?php if($row_menues['menu_halo_bar']){ ?>
        <div id="menu2">
        	<a href="../img_menues/<?php echo $row_menues['menu_halo_bar']; ?>" target="_blank"><?php echo $row_menues['menu_halo_bar']; ?></a>
            <a href="javascript:del_imagen('menu2','arch3');" style="vertical-align:bottom;"> 
            <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a>
            <br />
        </div>
        <?php } ?>        
      
      
      <input type="file" name="menu_halo_bar" value="<?php echo htmlentities($row_menues['menu_halo_bar'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Menu tragos:</td>
      <td>
      
 		<?php if($row_menues['menu_tragos']){ ?>
        <div id="menu3">
        	<a href="../img_menues/<?php echo $row_menues['menu_tragos']; ?>" target="_blank"><?php echo $row_menues['menu_tragos']; ?></a>
            <a href="javascript:del_imagen('menu3','arch4');" style="vertical-align:bottom;"> 
            <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a>
            <br />
        </div>
        <?php } ?>      
      
      
      <input type="file" name="menu_tragos" value="<?php echo htmlentities($row_menues['menu_tragos'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Menu cafeteria:</td>
      <td>
      
 		<?php if($row_menues['menu_cafeteria']){ ?>
        <div id="menu4">
        	<a href="../img_menues/<?php echo $row_menues['menu_cafeteria']; ?>" target="_blank"><?php echo $row_menues['menu_cafeteria']; ?></a>
            <a href="javascript:del_imagen('menu4','arch5');" style="vertical-align:bottom;"> 
            <i style="vertical-align:bottom;" class="fa fa-trash-o fa-2x"></i></a>
            <br />
        </div>
        <?php } ?>        
      
      <input type="file" name="menu_cafeteria" value="<?php echo htmlentities($row_menues['menu_cafeteria'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="center" nowrap="nowrap"><input type="submit" value="Modificar" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="menues" />
  <input type="hidden" name="Id" value="<?php echo $row_menues['Id']; ?>" />
  <input name="arch1" type="hidden" id="arch1" value="<?php echo htmlentities($row_menues['menu'], ENT_COMPAT, 'utf-8'); ?>" />  
  
  <input name="arch2" type="hidden" id="arch2" value="<?php echo htmlentities($row_menues['menu_ejecutivo'], ENT_COMPAT, 'utf-8'); ?>" />  
  <input name="arch3" type="hidden" id="arch3" value="<?php echo htmlentities($row_menues['menu_halo_bar'], ENT_COMPAT, 'utf-8'); ?>" />  
  <input name="arch4" type="hidden" id="arch4" value="<?php echo htmlentities($row_menues['menu_tragos'], ENT_COMPAT, 'utf-8'); ?>" />  
  <input name="arch5" type="hidden" id="arch5" value="<?php echo htmlentities($row_menues['menu_cafeteria'], ENT_COMPAT, 'utf-8'); ?>" />          
</form>
<?php mysqli_free_result($menues); ?>