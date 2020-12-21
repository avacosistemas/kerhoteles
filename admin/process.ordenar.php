<?php
include "access.php"; 

$datos = explode("&",$_REQUEST['data']);

for($i=1;$i<=count($datos);$i++){

	if(compara($datos[$i])!=''){
		mysqli_query($kerhistoric, 'update '.escape($_REQUEST['t']).' set orden = '.$i.' where Id = '.compara($datos[$i])) or die(mysqli_error());
	}
	
}


function compara($d){
$pos = strpos($d, '=');
$pos++;
return(substr($d,$pos));
}
?>