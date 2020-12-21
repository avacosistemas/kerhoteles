<?php if(!isset($database_kerhistoric)){ include "access.php"; } ?>
<form action="procesos.php" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Usuario:</td>
      <td><input type="text" required name="user" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contrase&ntilde;a:</td>
      <td><input type="text" required name="pass" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap">&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="center" nowrap="nowrap"><input type="submit" value="Crear" class="boton" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="usuarios_add" />
</form>