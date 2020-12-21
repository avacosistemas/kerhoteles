<?php 


//require_once('Connections/kerhistoric.php');

    $cabeceras = "MIME-Version: 1.0\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1\n";
	$cabeceras .=  "From:ventasker@kerhoteles.com.ar";
	$cabeceras .= "\n";


if($_POST['nombre']!=''){

$asunto="KER expriencias"; 



$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="100%" border="0">

  <tr>
    <td>Experiencia</td>
    <td>'.$_POST['experiencia'].'</td>
  </tr>

  <tr>
    <td width="20%">Nombre</td>
    <td width="80%">'.$_POST['nombre'].'</td>
  </tr>
  
  <tr>
    <td>Email</td>
    <td>'.$_POST['email'].'</td>
  </tr>
  
  <tr>
    <td>Telefono</td>
    <td>'.$_POST['tel'].'</td>
  </tr>
  


  <tr>
    <td>Mensaje</td>
    <td>'.$_POST['mensaje'].'</td>
  </tr>
</table>

</body>
</html>
';	




if ((isset($_POST["email"])) && ($_POST["email"] != "")) {
/*	
$userIP = $_SERVER["REMOTE_ADDR"];
$recaptchaResponse = $_POST['g-recaptcha-response'];
$secretKey = "6LcbJ5cUAAAAAPmWWmwme_hsJRjLI9T2-9xIRPI8";
$request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIP}");
if(strstr($request, "true")){		
	
*/	

$hostname_kerhistoric = "localhost:3306";
$database_kerhistoric = "kerhistoric_2019";
$username_kerhistoric = "ker_2019";
$password_kerhistoric = "4&Qh0g3a";
$kerhistoric = mysqli_connect($hostname_kerhistoric, $username_kerhistoric, $password_kerhistoric);



//$abyss = mysqli_connect($hostname_abyss, $username_abyss, $password_abyss); 

  $insertSQL = sprintf("INSERT INTO contactos (fecha, tipo, asunto, nombre, telefono, email, experiencia,  tipo_respuesta, consulta) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(date('Y-m-d'), "date"),
                       GetSQLValueString('experiencia', "text"),
                       GetSQLValueString($_POST['asunto'], "text"),					   
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['tel'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['experiencia'], "text"),					   
                       GetSQLValueString($_POST['radioemail'], "text"),					   
                       GetSQLValueString($_POST['mensaje'], "text"));

  mysqli_select_db($kerhistoric, $database_kerhistoric);
  $Result1 = mysqli_query($kerhistoric, $insertSQL);


$query_experiencias = "SELECT * FROM experiencias where Id = ".intval($_POST['eml']);
$experiencias = mysqli_query($kerhistoric, $query_experiencias) or die(mysqli_error());
$row_experiencias = mysqli_fetch_assoc($experiencias);



mail( $row_experiencias['email'], $asunto, $html,  $cabeceras );

//mail( 'emauri@gmail.com', $asunto, $html,  $cabeceras );

/*mail( 'kerhoteles@kerhoteles.com.ar', $asunto, $html,  $cabeceras );
mail( 'reservassantelmo@kerhoteles.com.ar', $asunto, $html,  $cabeceras );
mail( 'barbara.morello@kaser.com.ar', $asunto, $html,  $cabeceras );
*/
}

header("Location: gracias.php");
//}
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