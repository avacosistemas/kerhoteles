<?php 
  include "access.php"; 
  $id=intval($_GET['id']);
  $SQL = "update  galeria set archivo_".escape($_GET['idioma'])."='' WHERE Id =".$id;
  mysqli_query($kerhistoric, $SQL) or die(mysqli_error());
?>