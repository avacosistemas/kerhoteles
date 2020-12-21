<?php 
  include "access.php"; 
  $tabla=escape($_GET['t']);
  $id=intval($_GET['id']);
  $SQL = "DELETE FROM ".$tabla." WHERE Id =".$id;
  mysqli_query($kerhistoric, $SQL) or die(mysqli_error());
?>