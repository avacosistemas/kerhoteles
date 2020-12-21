<?php
include "access.php"; 

$query_ventas = "SELECT * FROM contactos  WHERE Id > 0  ";


if($_REQUEST['tipo'] and $_REQUEST['tipo']!='General'){
	$query_ventas .= " and tipo =  '".escape($_REQUEST['tipo'])."' ";
}

if(isset($_POST['desde']) && $_POST['desde']!=''){
	$query_ventas .= " and fecha >=  '".ingles($_REQUEST['desde'])."' ";	
}

if(isset($_POST['hasta']) && $_POST['hasta']!=''){
	$query_ventas .= " and fecha <=  '".ingles($_REQUEST['hasta'])."' ";	
}

$query_ventas .= " order by fecha desc, Id desc ";

$ventas = mysqli_query($kerhistoric, $query_ventas) or die(mysqli_error());
$row_ventas = mysqli_fetch_assoc($ventas);


if(mysqli_num_rows($ventas)){
	

	
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=".$_POST['tipo']."_".date('d_m_Y').".xls");
header("Pragma: no-cache");
header("Expires: 0");



   do { 
   $data .= utf8_decode($row_ventas['tipo'])."\t"; 	
        $data .= espanol($row_ventas['fecha'])."\t";
        $data .= utf8_decode($row_ventas['asunto'])."\t";		
        $data .= utf8_decode($row_ventas['nombre'])."\t";
        $data .= utf8_decode($row_ventas['apellido'])."\t";
        $data .= utf8_decode($row_ventas['hotel'])."\t";
        $data .= utf8_decode($row_ventas['nacionalidad'])."\t";						
        $data .= utf8_decode($row_ventas['email'])."\t";      
        $data .= utf8_decode($row_ventas['telefono'])."\t"; 
        $data .= utf8_decode($row_ventas['tipo_respuesta'])."\t";		
        $data .= utf8_decode(der($row_ventas['consulta']))."\t"; 	
		
		
			
		
if($_REQUEST['tipo']=='promocion'){

	        $data .= utf8_decode(der($row_ventas['promocion']))."\t"; 	
}

if($_REQUEST['tipo']=='experiencia'){

	        $data .= utf8_decode(der($row_ventas['experiencia']))."\t"; 	
}
		
		
        
		
	/*	if($row_ventas['archivo']!=''){
	        $data .= "kerhistoric.com.ar/contactos/".$row_ventas['archivo']; 	
		}
*/
		$data .= "\n";
		
     } while ($row_ventas = mysqli_fetch_assoc($ventas));




//if($_REQUEST['tipo']=='Evento'){	
	print "Tipo\tFecha\tAsunto\tNombre\tApellido\tHotel\tNacionalidad\tEmail\tTelefono\tTipo respuesta\tMensaje";
	
	
if($_REQUEST['tipo']=='promocion'){

	       print "\tPromocion"	;
}	


if($_REQUEST['tipo']=='experiencia'){

	       print "\tExperiencia"	;
}	
	
/*}else { 
	print "Tipo\tFecha\tNombre\tEmail\tTelefono\tMensaje\tTipo";
}*/

print "\n$data";

} else { echo 'No hay datos'; }


function der($var1) {
	$cadena = $var1;
	$cadena = str_replace( chr(13), "", $cadena );
	$cadena = str_replace( "'", "", $cadena );	
	$cadena = str_replace( '"', '', $cadena );		
	$cadena = str_replace( chr(10) & chr(10), "", $cadena);
	$cadena = str_replace( chr(10), "",  $cadena );
	

	
return($cadena)	;
} 

function fre($cadena){
	$cadena=str_replace(" ","_",$cadena);	
	return($cadena);	
}


mysqli_free_result($ventas); 
?>