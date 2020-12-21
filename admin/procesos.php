<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

 include "access.php"; 

//fijar a 800

  if($_POST['Id']!=''){
	$id = intval($_POST['Id']);  
  } else {
	 if(@$_POST["MM_insert"] != "usuarios_add"){ 
	 
	 
$query_promociones = "SELECT Id FROM ".escape($_POST["MM_update"])." order by Id desc limit 1";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);
if(mysqli_num_rows($promociones)){
	  $id=$row_promociones['Id'];
	 $id++;
} else {
	$id=1;
}
	 

		mysqli_query($kerhistoric, "INSERT INTO ".escape($_POST["MM_update"])." (Id) VALUES ($id)") or die(mysqli_error());
		//$id=$smrIDcargado=mysqli_insert_id($kerhistoric);
		
		
	  
	 }
  }


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "usuarios_add")) {
  $insertSQL = sprintf("INSERT INTO usuarios (`user`, pass) VALUES (%s, %s)",
                       GetSQLValueString($_POST['user'], "text"),
                       GetSQLValueString($_POST['pass'], "text"));
  mysqli_query($kerhistoric, $insertSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=usuarios_mod&success";
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "usuarios_mod")) {
  $updateSQL = sprintf("UPDATE usuarios SET user=%s, pass=%s WHERE Id=%s",
                       GetSQLValueString($_POST['user'], "text"),
                       GetSQLValueString($_POST['pass'], "text"),					   
                       GetSQLValueString($_POST['Id'], "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=usuarios_mod&success";
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "sliders")) {
  $campo = sube_fotos3("arch","foto","../img_sliders/","","","","","","N","N","Y","","N","N");
  $campomobile = sube_fotos3("arch_mobile","foto_mobile","../img_sliders/","","","","","","N","N","Y","","N","N");  	
  $updateSQL = sprintf("UPDATE sliders SET foto_desktop=%s, foto_mobile=%s WHERE Id=%s",
                       GetSQLValueString($campo, "text"),
                       GetSQLValueString($campomobile, "text"),					   
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=sliders_mod";
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "novedades")) {
  $campo1 = sube_fotos3("arch1","foto1","../img_novedades/","","","","","","N","N","N","","Y","N");
  $updateSQL = sprintf("UPDATE novedades SET fecha=%s, titulo=%s, copete=%s, texto=%s, link=%s, foto1=%s WHERE Id=%s",
                       GetSQLValueString(ingles($_POST['fecha']), "date"),
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['copete'], "text"),
                       GetSQLValueString($_POST['texto'], "text"),
                       GetSQLValueString($_POST['link'], "text"),
                       GetSQLValueString($campo1, "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=novedades_mod";
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "categorias")) {
  $updateSQL = sprintf("UPDATE categorias SET nombre=%s WHERE Id=%s",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=categorias_mod";
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "subcategorias")) {
	
	if(isset($_POST['iram']) && $_POST['iram']=='Y'){
			$iram = 'Y';
	} else { 
			$iram = 'N';	
	}	
	
	
  $campo = sube_fotos3("arch","foto","../img_subcategorias/","","","","","","N","N","Y","","N","N");
  $campo1 = sube_fotos3("arch1","icono","../img_subcategorias/","","","","","","N","N","Y","","N","N");
  $campo2 = sube_fotos3("arch2","pdf","../img_subcategorias/","","","","","","N","N","Y","","N","N");    	
  $campo3 = sube_fotos3("arch3","foto_detalle","../img_subcategorias/","","","","","","N","N","Y","","N","N");    	  
  $updateSQL = sprintf("UPDATE subcategorias SET id_categoria=%s, iram=%s, nombre=%s, foto=%s,foto_detalle=%s, copete=%s, icono=%s, texto=%s, pdf=%s, caracteristicas=%s WHERE Id=%s",
                       GetSQLValueString($_POST['id_categoria'], "int"),
                       GetSQLValueString($_POST['iram'], "text"),					   					   
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($campo, "text"),
                       GetSQLValueString($campo3, "text"),					   
                       GetSQLValueString($_POST['copete'], "text"),
                       GetSQLValueString($campo1, "text"),
                       GetSQLValueString($_POST['texto'], "text"),
                       GetSQLValueString($campo2, "text"),
                       GetSQLValueString($_POST['caracteristicas'], "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=subcategorias_mod";
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "lineas")) {
  $updateSQL = sprintf("UPDATE lineas SET id_categoria=%s, id_subcategoria=%s, nombre=%s WHERE Id=%s",
                       GetSQLValueString($_POST['id_categoria'], "int"),
                       GetSQLValueString($_POST['id_subcategoria'], "int"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=lineas_mod";
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "productos")) {
	
	

	
  $campo = sube_fotos3("arch","foto","../img_productos/","","","","","","N","N","Y","","N","N");	
  $updateSQL = sprintf("UPDATE productos SET id_categoria=%s,   id_subcategoria=%s, id_linea=%s, nombre=%s, foto=%s, texto=%s WHERE Id=%s",
                       GetSQLValueString($_POST['id_categoria'], "int"),
                       GetSQLValueString($_POST['id_subcategoria'], "int"),
                       GetSQLValueString($_POST['id_linea'], "int"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($campo, "text"),
                       GetSQLValueString($_POST['texto'], "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=productos_mod";
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "distribuidores")) {
  $updateSQL = sprintf("UPDATE distribuidores SET empresa=%s, provincia=%s, direccion=%s, contacto=%s WHERE Id=%s",
                       GetSQLValueString($_POST['empresa'], "text"),
                       GetSQLValueString($_POST['provincia'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['contacto'], "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL) or die(mysqli_error());
  $GoTo = "admin.php?p=distribuidores_mod";
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "promociones")) {
  $campo = sube_fotos3("arch","foto","../img_promociones/","","","","","","N","N","Y","","N","N");
  $campo1 = sube_fotos3("arch1","foto_popup_esp","../img_promociones/","","","","","","N","N","Y","","N","N");
  $campo2 = sube_fotos3("arch2","foto_popup_ing","../img_promociones/","","","","","","N","N","Y","","N","N");    	
  $campo3 = sube_fotos3("arch3","foto_detalle","../img_promociones/","","","","","","N","N","Y","","N","N");    	  
  
  $campo4 = sube_fotos3("arch4","popup_interior_esp","../img_promociones/","","","","","","N","N","Y","","N","N");    	  
  $campo5 = sube_fotos3("arch5","popup_interior_ing","../img_promociones/","","","","","","N","N","Y","","N","N");    
  	      
    $updateSQL = sprintf("UPDATE promociones SET titulo_esp=%s, titulo_ing=%s, foto=%s, foto_popup_esp=%s, foto_popup_ing=%s, foto_detalle=%s, popup_interior_esp=%s, popup_interior_ing=%s, texto_esp=%s, texto_ing=%s, email=%s WHERE Id=%s",
                       GetSQLValueString($_POST['titulo_esp'], "text"),
                       GetSQLValueString($_POST['titulo_ing'], "text"),
                       GetSQLValueString($campo, "text"),
                       GetSQLValueString($campo1, "text"),
                       GetSQLValueString($campo2, "text"),					   					   
                       GetSQLValueString($campo3, "text"),					   					   					   
                       GetSQLValueString($campo4, "text"),					   					   					   
                       GetSQLValueString($campo5, "text"),					   					   					   					   					   
                       GetSQLValueString($_POST['texto_esp'], "text"),
                       GetSQLValueString($_POST['texto_ing'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL ) or die(mysqli_error());
  $GoTo = "admin.php?p=promociones_mod";
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "experiencias")) {
  $campo = sube_fotos3("arch","foto","../img_experiencias/","","","","","","N","N","Y","","N","N");
  $campo1 = sube_fotos3("arch1","foto_popup_esp","../img_experiencias/","","","","","","N","N","Y","","N","N");
  $campo2 = sube_fotos3("arch2","foto_popup_ing","../img_experiencias/","","","","","","N","N","Y","","N","N");    	
  $campo3 = sube_fotos3("arch3","foto_detalle","../img_experiencias/","","","","","","N","N","Y","","N","N");    	  
  
  $campo4 = sube_fotos3("arch4","popup_interior_esp","../img_experiencias/","","","","","","N","N","Y","","N","N");    	  
  $campo5 = sube_fotos3("arch5","popup_interior_ing","../img_experiencias/","","","","","","N","N","Y","","N","N");    
  	      
    $updateSQL = sprintf("UPDATE experiencias SET titulo_esp=%s, titulo_ing=%s, foto=%s, foto_popup_esp=%s, foto_popup_ing=%s, foto_detalle=%s, popup_interior_esp=%s, popup_interior_ing=%s, texto_esp=%s, texto_ing=%s, email=%s WHERE Id=%s",
                       GetSQLValueString($_POST['titulo_esp'], "text"),
                       GetSQLValueString($_POST['titulo_ing'], "text"),
                       GetSQLValueString($campo, "text"),
                       GetSQLValueString($campo1, "text"),
                       GetSQLValueString($campo2, "text"),					   					   
                       GetSQLValueString($campo3, "text"),					   					   					   
                       GetSQLValueString($campo4, "text"),					   					   					   
                       GetSQLValueString($campo5, "text"),					   					   					   					   					   
                       GetSQLValueString($_POST['texto_esp'], "text"),
                       GetSQLValueString($_POST['texto_ing'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($id, "int"));
  mysqli_query($kerhistoric, $updateSQL ) or die(mysqli_error());
  $GoTo = "admin.php?p=experiencias_mod";
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "menues")) {
  $campo1 = sube_fotos3("arch1","menu","../img_menues/","","","","","","N","N","N","","N","N");	
  $campo2 = sube_fotos3("arch2","menu_ejecutivo","../img_menues/","","","","","","N","N","N","","N","N");	
  $campo3 = sube_fotos3("arch3","menu_halo_bar","../img_menues/","","","","","","N","N","N","","N","N");	
  $campo4 = sube_fotos3("arch4","menu_tragos","../img_menues/","","","","","","N","N","N","","N","N");	
  $campo5 = sube_fotos3("arch5","menu_cafeteria","../img_menues/","","","","","","N","N","N","","N","N");	        
  $updateSQL = sprintf("UPDATE menues SET menu=%s, menu_ejecutivo=%s, menu_halo_bar=%s, menu_tragos=%s, menu_cafeteria=%s WHERE Id=%s",
                       GetSQLValueString($campo1, "text"),
                       GetSQLValueString($campo2, "text"),
                       GetSQLValueString($campo3, "text"),
                       GetSQLValueString($campo4, "text"),
                       GetSQLValueString($campo5, "text"),
                       GetSQLValueString(1, "int"));
  mysqli_query($kerhistoric, $updateSQL ) or die(mysqli_error());
  $GoTo = "admin.php?p=menues_mod2&success";
}

  mysqli_close($kerhistoric);
  header("Location: " . $GoTo);
?>