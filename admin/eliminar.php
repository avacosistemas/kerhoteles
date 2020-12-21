<?php include "access.php"; 
  $tabla=escape($_GET['t']);
  $id=intval($_GET['id']);
  $SQL = "DELETE FROM ".$tabla." WHERE Id =".$id;
  mysqli_query($kerhistoric, $SQL) or die(mysqli_error());
  

//if($tabla=='registrados'){header("Location: admin.php?p=registrados"); exit(); }

if(isset($_GET['tl']) && $_GET['tl'] !=''){$tl='&tl='.intval($_GET['tl']);} else { $tl='';}

header("Location: admin.php?p=".$tabla."_mod".$tl);

?>
