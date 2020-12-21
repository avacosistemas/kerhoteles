/*function borrar (p,t) {
  if (confirm('Desea Borrar?')){ 
		location.replace('eliminar.php?id='+p+'&t='+t);
    }
}*/


function borrar_ajax (id,t) {
  if (confirm('Desea Borrar?')){ 
		$.get("eliminar_ajax.php", { t:t, id:id },
			  function(data){
				$("#"+id).fadeOut('slow');
		 });
  }
}

function borrar_archivo (idioma,id,arch) {
  if (confirm('Desea Borrar?')){ 
		$.get("eliminar_archivo.php", { idioma:idioma, id:id },
			  function(data){
				$("#arc_"+idioma).slideUp('slow');
				$("#"+arch).val('');
				
		 });
  }
}

function numeros(e) {
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true;
patron = /[0-9]/; 
te = String.fromCharCode(tecla);
return patron.test(te);
}

    function del_imagen(id, arch){
		if(confirm('Desea Borrar')){
			$("#"+id).slideUp();
			$("#"+arch).val('');	
		}
	}


$(document).ready(function() {

	$('input[value="Modificar"]').addClass("btn btn-primary");
	$('input[value="Crear"]').addClass("btn btn-primary");
	$('input[value="Crear"]').after(' <input type="button" value="Volver" class="btn btn-primary" onclick="history.back();" id="volver" />');
	$('input:text').addClass("form-control");
	$("select").addClass("form-control");	
	$('input:text , textarea').addClass("form-control");	
	$('input:text , textarea').attr('rows', '6');		
	$('input:file').addClass("form-control uniform_on");	
	$('input:selects').addClass("form-control");		
	
	
});