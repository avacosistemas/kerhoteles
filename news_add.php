<?php require_once('Connections/kerhistoric.php'); 

if ((isset($_GET["email"])) && ($_GET["email"] != "")) {
  $SQL = sprintf("INSERT INTO contactos (email, tipo, fecha) VALUES (%s, 'newsletter',  '".date('Y-m-d')."')",
                       GetSQLValueString($_GET['email'], "text"));
  mysqli_query($kerhistoric, $SQL ) or die(mysqli_error());
}




function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{


  //$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
?>