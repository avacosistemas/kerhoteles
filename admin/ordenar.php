<script src="js/drag.js" type="text/javascript"></script> 
<link href="css/e.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"> 
  $(document).ready(function() {
	$('#table-1').tableDnD({
		onDrop: function(table, row) {

			$.get("process.ordenar.php", { data: $.tableDnD.serialize(), t:'<?php echo $tabla; ?>' });
		},

	});
	
	
	


$("#table-1 tr").hover(function() {
      $(this.cells[0]).addClass('ordenar');
}, function() {
      $(this.cells[0]).removeClass('ordenar');
});


});
</script>