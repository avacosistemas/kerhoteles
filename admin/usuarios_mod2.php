<?php 
if(!isset($database_kerhistoric)){ include "access.php"; }
$colname_usuarios = "-1"; if (isset($_GET['id'])) {$colname_usuarios = intval($_GET['id']);}
$query_usuarios = sprintf("SELECT * FROM usuarios WHERE Id = %s", GetSQLValueString($colname_usuarios, "int"));
$usuarios = mysqli_query($kerhistoric, $query_usuarios) or die(mysqli_error());
$row_usuarios = mysqli_fetch_assoc($usuarios);
if(mysqli_num_rows($usuarios)){
?>
<form action="procesos.php" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Usuario:</td>
      <td><input type="text" name="user" required value="<?php echo htmlentities($row_usuarios['user'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contrase&ntilde;a:</td>
      <td><input type="text" name="pass" required value="<?php echo htmlentities($row_usuarios['pass'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap">&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="center" nowrap="nowrap">
        <input type="submit" value="Modificar" class="boton"/>
        <input type="button" value="Volver" onclick="location.replace('admin.php?p=usuarios_mod');" class="btn btn-primary" />
      </td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="usuarios_mod" />
  <input type="hidden" name="Id" value="<?php echo $row_usuarios['Id']; ?>" />
</form>
<?php } else { echo 'Usuario no encontrado'; }
mysqli_free_result($usuarios); ?>