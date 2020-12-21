<?php 
if (!isset($_SESSION)) {session_start();}

if(!isset($_SESSION['MM_User_User']) || $_SESSION['MM_User_User'] == '') {
		header("Location: index.php");	 
		exit();
} else { 
		require_once('../Connections/kerhistoric.php');	
		 mysqli_select_db($kerhistoric, $database_kerhistoric);
		include "funciones.php"; 
}
?>