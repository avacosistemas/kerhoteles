<?php
///////////////////////////////// SUBE FOTOS ////////////////////////////////////////////
//$arch: Es para el mod 
//$campo_browse: Como se llama el campo file
//$ruta: es donde guardo la imagen/archivo
//$prefijo: agrega un prefijo ADELANTE si no se pone nada no hace nada
//$nuevo_nombre cambia nombre del archivo
//$carpeta: nombre de la carpeta de destino, si no existe la crea
//$sin_subir: usa la foto de original, no sube nada
//$cut: es el tamaño maximo que puede tener la foto de alto
//$corte: puede ser ancho o alto y lo que busca es que no se achique si la foto es muy chica
//$unica: le pone código unico adelante


/*--------------- FALLA EN NUEVO NOMBRE ------------*/


function sube_fotos3($arch,$campo_browse,$ruta,$alto,$ancho,$prefijo,$nuevo_nombre,$carpeta,$sin_subir,$borrar_original,$jpg,$corte,$aure, $cut, $unica='Y'){
$extension = substr(strtolower($_FILES[$campo_browse]['name']),-3,3);
$arch=$_POST[$arch];
$ancho_original = $ancho;
$alto_original = $alto;

if(basename($_FILES[$campo_browse]['name'])!=NULL){
/*-------- CHEQUEO QUE NO SE PHP -----------------------------------------------*/	
if($extension=='php'){die ("NO SE PUEDEN SUBIR ARCHIVOS DE ESTE TIPO");}
/*-------- SOLO JPG ------------------------------------------------------------*/
if($jpg=='Y'){
if($extension!='jpg' && $extension!='png'){die ("SOLO SE PUEDEN SUBIR ARCHIVOS CON EXTENSION JPG y PNG<br><a href=\"javascript:history.back();\">Volver al panel</a>");}
}
/*-------- CREO CARPETA ORIGINAL -----------------------------------------------*/	
if($sin_subir=='N'){
if (!file_exists($ruta."original")){	
mkdir ($ruta."original", 0777) or die("No se ha podido crear el directorio $ruta original");
@chmod($ruta."original", 0777);
}
}
/*-------- NORMALIZO NOMBRE --------------------------------------------------------*/
/*$nombre=preg_replace(' ','_',basename($_FILES[$campo_browse]['name']));
$nombre=preg_replace("[^A-Za-z0-9._]", "", $nombre);*/

$nombre=preg_replace("/[^0-9a-zA-Z\-.]/", "", basename($_FILES[$campo_browse]['name']));

if($unica=='Y'){
	
	$agregado=date('mdHi');
	$nombre=$agregado.'_'.$nombre;	
	//$nombre=md5(microtime()).'_'.$nombre;
}

$nombre_original = $nombre;
/*-------- SUBO FOTO ------------------------------------------------------------*/	
if($sin_subir=='N'){
move_uploaded_file($_FILES[$campo_browse]['tmp_name'], $ruta."original/".$nombre)or die("No se ha podido subir la foto original");
@chmod($ruta.$nombre, 0777);	
}
/*-------- PREFIJO --------------------------------------------------------------*/	
//$nombre = $prefijo.$nombre;
/*-------- NOMBRE  --------------------------------------------------------------*/
if($nuevo_nombre!=''){$nombre=$nuevo_nombre;}
/*-------- CARPETA --------------------------------------------------------------*/
if($carpeta!=''){
if (!file_exists($ruta.$carpeta)){	
mkdir ($ruta.$carpeta, 0777) or die("No se ha podido crear la carpeta $ruta.$carpeta");
@chmod($ruta.$carpeta, 0777);
}
}
/*------- GENERO FOTO -----------------------------------------------------------*/
if($jpg=='Y' && $extension='jpg' && $alto!='' && $ancho !=''){
$datos = getimagesize($ruta."original/".$nombre_original) or die("PROBLEMAS CON FOTO ORIGINAL IMAGESIZE");	
/*$alto_original=$datos[1];
$ancho_ancho_ariginal=$datos[0];*/


if($aure=='Y'){
if($datos[0]<$datos[1]){
$porcentaje = 	$alto / $ancho;
$nueva_proporcion = $datos[1] / $datos[0];
if($nueva_proporcion > $porcentaje){$ancho = "N"; }
if($nueva_proporcion < $porcentaje){$alto = "N"; }
} else {
$porcentaje = 	$ancho / $alto;
$nueva_proporcion = $datos[0] / $datos[1];
if($nueva_proporcion > $porcentaje){$alto = "N"; }
if($nueva_proporcion < $porcentaje){$ancho = "N"; }
}
}

if($cut=='Y'){
if($datos[0]<$datos[1]){
$porcentaje = 	$alto / $ancho;
$nueva_proporcion = $datos[1] / $datos[0];
if($nueva_proporcion > $porcentaje){$alto = "N"; }
if($nueva_proporcion < $porcentaje){$ancho = "N"; }
$corto_por=0;
} else {
$porcentaje = 	$ancho / $alto;
$nueva_proporcion = $datos[0] / $datos[1];
if($nueva_proporcion > $porcentaje){$ancho = "N"; }
if($nueva_proporcion < $porcentaje){$alto = "N"; }
$corto_por=1;
}
}



$hacer = 'Y';

if($alto =='N' || $ancho == 'N') {
if($alto == 'N') {
$proporcion = $ancho / $datos[0];
$alto = $datos[1] * $proporcion;
if($datos[0]<=$ancho){$hacer='N';}
}
if($ancho == 'N') {
$proporcion = $alto / $datos[1];
$ancho = $datos[0] * $proporcion;
if($datos[1]<=$alto){$hacer='N';}
}
}


if($hacer=='Y'){


$extsss = substr(strtolower($nombre),-3,3);

if($extsss=='png'){	
	$img = imagecreatefrompng($ruta.'original/'.$nombre) or die("NO SE PUDO CREAR LA IMAGEN PNG".$extension);
} else  {
	$img = imagecreatefromjpeg($ruta.'original/'.$nombre) or die("NO SE PUDO CREAR LA IMAGEN JPG");	
}




$thumb = imagecreatetruecolor($ancho,$alto);
imagecopyresampled ($thumb, $img, 0, 0, 0, 0, $ancho, $alto, $datos[0], $datos[1]);
imagejpeg($thumb,$ruta.$prefijo.$nombre);
@chmod($ruta.$prefijo.$nombre, 0777);
} else {
copy($ruta."original/".$nombre_original,$ruta.$carpeta.'/'.$prefijo.$nombre);
@chmod($ruta.$prefijo.$nombre, 0777);
}

if($cut=='Y' && $hacer=='Y'){ //DESPUES QUE SE GENERA LA FOTO LA CORTA Y LA PISA
if($corto_por == 1){$corta=$ancho-$ancho_original;}
if($corto_por == 0){$corta=$alto-$alto_original;}
$datoscut = getimagesize($ruta.$prefijo.$nombre);
@chmod($ruta.$prefijo.$nombre, 0777);
image_cut($ruta.$prefijo.$nombre,$ruta.$prefijo.$nombre,$corta,$corto_por);
@chmod($ruta.$prefijo.$nombre, 0777);
//unlink($ruta.'temp_'.$prefijo.$nombre);
}

} else {
copy($ruta."original/".$nombre_original,$ruta.$carpeta.'/'.$nombre);	
//@unlink($ruta."original/".$nombre_original);
}

return($nombre_original);



} else {return($arch);}

} 



function image_cut($src,$destino,$cutpx,$corto_por){ 
$size = getimagesize($src);/* Propiedades de la imagen */ 
$im=imagecreatefromjpeg($src); /*Tomo la imagen origen */ 

if($corto_por==1){
$img=imagecreatetruecolor($size[0]-$cutpx,$size[1]);
imagecopyresampled($img, $im, 0, 0, 0, 0, $size[0]-$cutpx,$size[1], $size[0]-$cutpx, $size[1]); 
} else {
$img=imagecreatetruecolor($size[0],$size[1]-$cutpx);	
imagecopyresampled($img, $im, 0, 0, 0, 0, $size[0],$size[1]-$cutpx, $size[0], $size[1]-$cutpx); 	
}	
ImageJPEG($img,$destino,100); /*Exporto la CANVAS a JPG con 85% */ 
ImageDestroy($img); /* La Borro de la Cache */ 
/* El procedimiento es similar a usar un editor de imagenes */ 
}








?>