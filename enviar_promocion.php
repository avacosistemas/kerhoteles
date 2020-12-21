<?php 


//require_once('Connections/kerhistoric.php');

    $cabeceras = "MIME-Version: 1.0\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1\n";
	$cabeceras .=  "From:ventasker@kerhoteles.com.ar";
	$cabeceras .= "\n";


if($_POST['nombre']!=''){

$asunto="KER promociones"; 



$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="100%" border="0">

  <tr>
    <td>Promocion</td>
    <td>'.$_POST['promocion'].'</td>
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

   $insertSQL = sprintf("INSERT INTO contactos (fecha, tipo, asunto, nombre, telefono, email, promocion,  tipo_respuesta, consulta) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(date('Y-m-d'), "date"),
                       GetSQLValueString('promocion', "text"),
                       GetSQLValueString($_POST['asunto'], "text"),					   
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['tel'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['promocion'], "text"),					   
                       GetSQLValueString($_POST['radioemail'], "text"),					   
                       GetSQLValueString($_POST['mensaje'], "text"));

  mysqli_select_db($kerhistoric, $database_kerhistoric);
  $Result1 = mysqli_query($kerhistoric, $insertSQL);


$query_promociones = "SELECT * FROM promociones where Id = ".intval($_POST['eml']);
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);



mail( $row_promociones['email'], $asunto, $html,  $cabeceras );
//mail( "emauri@gmail.com", $asunto, $html,  $cabeceras );
envia_ker('emauri@gmail.com', $asunto, $html);
/*mail( 'kerhoteles@kerhoteles.com.ar', $asunto, $html,  $cabeceras );
mail( 'reservassantelmo@kerhoteles.com.ar', $asunto, $html,  $cabeceras );
mail( 'barbara.morello@kaser.com.ar', $asunto, $html,  $cabeceras );
*/
}

//header("Location: gracias.php");
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

function envia_ker($email,$asunto, $html){
	require_once "class.phpmailer.php";

  $mail = new phpmailer();
  $mail->Mailer = "smtp";
  $mail->Host = "mail.kerhoteles.com.ar";
  $mail->SMTPAuth = true;
  $mail->SMTPDebug = 0;
  $mail->Username = "ventasker@kerhoteles.com.ar"; 
  $mail->Password = "Nhsv73~5";
  $mail->From = "ventasker@kerhoteles.com.ar";
  $mail->FromName = "Ker Hoteles";
  $mail->Timeout=30;
  //$mail->Encoding = "quoted-printable";
  $mail->ContentType = ("text/html; charset=iso-8859-1\n");
  
  $mail->AddAddress($email); 			
  
  $mail->AddReplyTo("ventasker@kerhoteles.com.ar","Ker Hoteles");
  $mail->Subject =$asunto;
  $mail->Body = $html;
  $mail->AltBody = "Deben habilitar html en el cliente de correo";
  $exito = $mail->Send();
  $intentos=1; 

  while ((!$exito) && ($intentos < 2)) {
	sleep(2);
    	$exito = $mail->Send();
     	$intentos=$intentos+1;	
  }		

}

?>