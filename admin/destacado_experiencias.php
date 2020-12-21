<?php 
if(!isset($database_kerhistoric)){ include "access.php"; }


if ((isset($_GET["id"])) && ($_GET["id"] != "")) {
 $SQL = " UPDATE experiencias set destacado_home = '".substr($_GET['destacado'],0,2)."' where Id = ".intval($_GET['id']);
  mysqli_query($kerhistoric, $SQL) or die(mysqli_error());
}