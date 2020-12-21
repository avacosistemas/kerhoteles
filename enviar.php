<?php 


error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once('Connections/kerhistoric.php');

    $cabeceras = "MIME-Version: 1.0\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1\n";
	$cabeceras .=  "From:info@kerhoteles.com.ar";
	$cabeceras .= "\n";



if($_POST['nombre']!=''){

$asunto="KER formulario web"; 



$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="100%" border="0">


  <tr>
    <td width="20%">Asunto</td>
    <td width="80%">'.$_POST['asunto'].'</td>
  </tr>
  <tr>
    <td width="20%">Nombre</td>
    <td width="80%">'.$_POST['nombre'].'</td>
  </tr>
  
  <tr>
    <td width="20%">Apellido</td>
    <td width="80%">'.$_POST['apellido'].'</td>
  </tr>  
  
  
  <tr>
    <td width="20%">Hotel</td>
    <td width="80%">'.$_POST['hotel'].'</td>
  </tr> 
  
  <tr>
    <td width="20%">Nacionalidad</td>
    <td width="80%">'.$_POST['nacionalidad'].'</td>
  </tr>       
  
  <tr>
    <td>Email</td>
    <td>'.$_POST['email'].'</td>
  </tr>
  
  

  <tr>
    <td>Mensaje</td>
    <td>'.$_POST['mensaje'].'</td>
  </tr>
</table>

</body>
</html>
';	

//envia_ker( 'emauri@gmail.com', $asunto, $html);
//envia_ker( 'infobas@gmail.com', $asunto, $html);



if ((isset($_POST["email"])) && ($_POST["email"] != "")) {
/*	
$userIP = $_SERVER["REMOTE_ADDR"];
$recaptchaResponse = $_POST['g-recaptcha-response'];
$secretKey = "6LcbJ5cUAAAAAPmWWmwme_hsJRjLI9T2-9xIRPI8";
$request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIP}");
if(strstr($request, "true")){		
	
*/	


$tipo = 'contacto';

if(isset($_POST['tipo']) && $_POST['tipo']!=''){
	$tipo = 	$_POST['tipo'];
}


  $insertSQL = sprintf("INSERT INTO contactos (fecha, tipo, asunto, nombre, apellido, hotel , nacionalidad, telefono, email, tipo_respuesta, consulta) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(date('Y-m-d'), "date"),
                       GetSQLValueString($tipo, "text"),
                       GetSQLValueString($_POST['asunto'], "text"),					   
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido'], "text"),
                       GetSQLValueString($_POST['hotel'], "text"),
                       GetSQLValueString($_POST['nacionalidad'], "text"),					   					   					   
                       GetSQLValueString($_POST['tel'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['radioemail'], "text"),					   
                       GetSQLValueString($_POST['mensaje'], "text"));

  mysqli_select_db($kerhistoric, $database_kerhistoric);
  $Result1 = mysqli_query($kerhistoric, $insertSQL);



envia_ker('ventasker@kerhoteles.com.ar', $asunto, $html);


if($tipo == 'Halo reserva'){

	envia_ker('kerhoteles@kerhoteles.com.ar', $asunto, $html);

	
} else if($tipo == 'Salones Cotizacion'){

	envia_ker('ventasker@kerhoteles.com.ar', "Contacto - Salones Cotizacion", $html);

} else if($tipo == 'spa'){
	
	envia_ker('ventasker@kerhoteles.com.ar', "Contacto - SPA", $html);

} else { 

	envia_ker('ventasker@kerhoteles.com.ar', $asunto, $html);
	
}



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
  
  $mail->AddAddress("infobas@gmail.com"); 
  //$mail->AddAddress("barbara.morello@kaser.com.ar");			
  
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