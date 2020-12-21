<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
 

  //$theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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

include "sube_fotos.php";

}

/*---------------------------------- FUNCIONES DEL SITIO --------------------*/
function generateFormToken($form) {
 
   // generar token de forma aleatoria
   $token = md5(uniqid(microtime(), true));
 
   // generar fecha de generación del token
   $token_time = time();
 
   // escribir la información del token en sesión para poder
   // comprobar su validez cuando se reciba un token desde un formulario
   $_SESSION['csrf'][$form.'_token'] = array('token'=>$token, 'time'=>$token_time);; 
 
   return $token;
}

function verifyFormToken($form, $token, $delta_time=0) {
 
   // comprueba si hay un token registrado en sesión para el formulario
   if(!isset($_SESSION['csrf'][$form.'_token'])) {
       return false;
   }
 
   // compara el token recibido con el registrado en sesión
   if ($_SESSION['csrf'][$form.'_token']['token'] !== $token) {
       return false;
   }
 
   // si se indica un tiempo máximo de validez del ticket se compara la
   // fecha actual con la de generación del ticket
   if($delta_time > 0){
       $token_age = time() - $_SESSION['csrf'][$form.'_token']['time'];
       if($token_age >= $delta_time){
      return false;
       }
   }
 
   return true;
}



function par($number) {
 return $number & 1; // 0 = par, 1 = impar
}

function numeros($num){
return(number_format($num, 2, '.', ''));	
}

function sino($v){
	if($v=='Y'){ 
		return('Si');
	} else {
		return('No');	
	}
}

function escape($val) {
  /*  if (get_magic_quotes_gpc()) $val = stripslashes($val);
   // $f = (function_exists('mysqli_real_escape_string')) ? "mysqli_real_escape_string" : ((function_exists('mysqli_escape_string')) ? "mysqli_escape_string" : "addslashes");
    return (!is_numeric($val)) ? $f($val) : $val;*/
	return($val);
} 

function ent($val){
	$val=preg_replace("[^0-9]", "", $val);
	$val=intval($val);
	return($val);
} 

function substrplus($texto,$caracteres){
$i=1;
$res='';
if(strlen($texto)>=$caracteres){
	do{	
		if($texto[$caracteres]==' '){
			$res = substr($texto,0,$caracteres);
			break;
		} else {
			$caracteres++;	
		}
	$i++;				
	} while ($i<1000);
	
	if($res){
		return($res);
	} else {
		return($texto);
	}
	
} else {
	return($texto);
}
}

function pass(){
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz234567890";
$cad = str_shuffle($str);
$cad= substr($cad,0,9);	
return($cad);
}  

function formato($numero){
$num = number_format($numero, 2, '.', '');
return($num);
}

////////////////////////////////// Thumbnails /////////////////////////////////
if (!function_exists("thumbjpeg")) {
function thumbjpeg($imagen,$altura,$carpeta, $prefijo, $anchura) {
$dir_thumb = $carpeta;
$prefijo_thumb = $prefijo;
$camino_nombre=explode("/",$imagen); 
$nombre=end($camino_nombre);
$camino=substr($imagen,0,strlen($imagen)-strlen($nombre));
if (!file_exists($camino.$dir_thumb))
mkdir ($camino.$dir_thumb, 0777) or die("No se ha podido crear el directorio $camino.$dir_thumb");
if (!file_exists($camino.$dir_thumb.$prefijo_thumb.$nombre)) {
$img = imagecreatefromjpeg($camino.$nombre) or die("No se encuentra la imagen $camino$nombre<br>n");
$datos = getimagesize($camino.$nombre) or die("Problemas con $camino$nombre<br>n");

////////// Acomodo Alto	////////////////
if($altura == 'N') {
	$proporcion = $anchura / $datos[0];
	$altura = $datos[1] * $proporcion;
}
////////////////////////////////////////////	
$thumb = imagecreatetruecolor($anchura,$altura);
imagecopyresampled ($thumb, $img, 0, 0, 0, 0, $anchura, $altura, $datos[0], $datos[1]);
imagejpeg($thumb,$camino.$dir_thumb.$prefijo_thumb.$nombre);
}
}


/////////////////////////////////// FECHAS //////////////////////////////////////////////
function  espanol ($hoy) {
	if($hoy!=''){
$cad2 = $hoy;
        $uno=substr($cad2, 8, 2);
        $dos=substr($cad2, 5, 2);
        $tres=substr($cad2, 0, 4);
        $hoy = ($uno."/".$dos."/".$tres);	
return ($hoy);
	}
}
function  ingles ($hoy) {
$cad2 = $hoy;
        $uno=substr($cad2, 6, 4);
        $dos=substr($cad2, 3, 2);
        $tres=substr($cad2, 0, 2);
        $hoy = ($uno."/".$dos."/".$tres);	
return ($hoy);
}

function meses($mes){
	if($_SESSION['idioma']==1){
$str_mes = array(1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',
8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');
	} else {
$str_mes = array(1=>'January',2=>'February',3=>'March',4=>'April',5=>'May',6=>'June',7=>'July',
8=>'August',9=>'September',10=>'October',11=>'November',12=>'December');		
	}
return($str_mes[$mes]);
}

$str_dias = array(1=>'Lunes',2=>'Martes',3=>'Miércoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',7=>'Domingo');
$str_dias2 = array('Mon'=>'Lunes','Tue'=>'Martes','Wed'=>'Miércoles','Thu'=>'Jueves','Fri'=>'Viernes','Sat'=>'Sabado','Sun'=>'Domingo');
$str_meses = array(1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',
8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');

function nueva_fecha($fecha){
return(substr($fecha,8,2).' '.meses(date('n',mktime(0, 0, 0, substr($fecha,5,2), substr($fecha,8,2), substr($fecha,0,4)))).' '.substr($fecha,0,4));	
}

function fecha_agenda($fecha){
return(utf8_decode(dd(date('D',mktime(0, 0, 0, substr($fecha,5,2), substr($fecha,8,2), substr($fecha,0,4))))).' '.substr($fecha,8,2).' de '.meses(date('n',mktime(0, 0, 0, substr($fecha,5,2), substr($fecha,8,2), substr($fecha,0,4)))));	
}

function dd($d){
if($d=='Mon'){return('Lunes');}
if($d=='Tue'){return('Martes');}
if($d=='Wed'){return('Miércoles');}
if($d=='Thu'){return('Jueves');}
if($d=='Fri'){return('Viernes');}
if($d=='Sat'){return('Sabado');}
if($d=='Sun'){return('Domingo');}
}


function smrFormatStr($var1) {
	$cadena = $var1;
	$cadena = str_replace( chr(13), "", $cadena );
	$cadena = str_replace( chr(10) & chr(10), "<br>", $cadena);
	$cadena = str_replace( chr(10), "<BR>",  $cadena );
return($cadena)	;
}

function addtags($text) {
	$cadena = $text;
//	$cadena = str_replace( chr(13), "", $cadena );
	$cadena = str_replace( chr(10) & chr(10), "</span></li><li><span>", $cadena);
	//$cadena = str_replace( chr(10), "<BR>",  $cadena );
return($cadena)	;
}

function consulta($db, $campo, $tabla, $id){
if($id!=''){	
$query_comodin = "SELECT $campo FROM $tabla WHERE Id = ".intval($id);
$comodin = mysqli_query($db, $query_comodin) or die(mysqli_error());
$row_comodin = mysqli_fetch_assoc($comodin);
mysqli_free_result($comodin);
return ($row_comodin[$campo]);
}
}


function re_texto($msg){

$msg = strip_tags($msg);

$msg=str_replace("%","-",$msg);	
$msg=str_replace('"','',$msg);	
$msg=str_replace('ñ','n',$msg);	
$msg=str_replace('á','a',$msg);	
$msg=str_replace('é','e',$msg);	
$msg=str_replace('í','i',$msg);	
$msg=str_replace('ó','o',$msg);	
$msg=str_replace('ú','u',$msg);


$msg=str_replace('&aacute;','a',$msg);
$msg=str_replace('&eacute;','e',$msg);
$msg=str_replace('&iacute;','i',$msg);
$msg=str_replace('&oacute;','o',$msg);
$msg=str_replace('&uacute;','u',$msg);

//////PREPOSICIONES////////////
$msg=str_replace(' a ',' ',$msg);
$msg=str_replace(' ante ',' ',$msg);
$msg=str_replace(' bajo ',' ',$msg);
$msg=str_replace(' con ',' ',$msg);
$msg=str_replace(' de ',' ',$msg);
$msg=str_replace(' desde ',' ',$msg);
$msg=str_replace(' durante ',' ',$msg);
$msg=str_replace(' en ',' ',$msg);
$msg=str_replace(' entre ',' ',$msg);
$msg=str_replace(' exepto ',' ',$msg);
$msg=str_replace(' hacia ',' ',$msg);
$msg=str_replace(' hasta ',' ',$msg);
$msg=str_replace(' mediante ',' ',$msg);
$msg=str_replace(' para ',' ',$msg);
$msg=str_replace(' por ',' ',$msg);
$msg=str_replace(' salvo ',' ',$msg);
$msg=str_replace(' según ',' ',$msg);
$msg=str_replace(' sin ',' ',$msg);
$msg=str_replace(' sobre ',' ',$msg);
$msg=str_replace(' tras ',' ',$msg);
$msg=str_replace(' del ',' ',$msg);
////////ARTICULOS///////////////
$msg=str_replace(' el ',' ',$msg);
$msg=str_replace(' la ',' ',$msg);
$msg=str_replace(' las ',' ',$msg);
$msg=str_replace(' lo ',' ',$msg);
$msg=str_replace(' los ',' ',$msg);
$msg=str_replace('El ',' ',$msg);
$msg=str_replace('La ',' ',$msg);
$msg=str_replace('Las ',' ',$msg);
$msg=str_replace('Lo ',' ',$msg);
$msg=str_replace('Los ',' ',$msg);
$msg=str_replace(' un ',' ',$msg);
$msg=str_replace(' una ',' ',$msg);
$msg=str_replace(' unos ',' ',$msg);
$msg=str_replace(' unas ',' ',$msg);
/////////OTROS//////////////////
$msg=str_replace(' y ',' ',$msg);
////////////////////////////////
$msg=strtolower($msg);
$msg=str_replace('‘','',$msg);	
$msg=str_replace('’','',$msg);
$msg=str_replace(" ","/",$msg);	
$msg=str_replace("//","/",$msg);	

$msg=preg_replace("[^a-z0-9-]", "", $msg);	
if($msg[0]=='/'){$msg=substr($msg,1);}
return($msg);
}

}
?>