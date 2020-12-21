<?php 
//if(!isset($database_kerhistoric)){ include "access.php"; }


?>

  <link href="css/footable-0.1.css" rel="stylesheet" type="text/css" />
  <link href="css/footable.sortable-0.1.css" rel="stylesheet" type="text/css" />
  <link href="css/footable.paginate.css" rel="stylesheet" type="text/css" />
  

  <script src="js/footable.js" type="text/javascript"></script>
  <script src="js/footable.sortable.js" type="text/javascript"></script>
  <script src="js/footable.filter.js" type="text/javascript"></script>
  <script src="js/footable.paginate20.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(function() {
      $('table').footable();
    });
  </script>

<div align="center"><strong><?php echo ucwords($_GET['tipo']); ?></strong></div>
<br /><br />
<form id="form1" name="form1" method="post" action="excel_contacto.php">

<input type="text" name="desde" class="form-control datepicker" autocomplete="off" style="width:231px; float:left; margin:0 10px 0 0;" placeholder="desde" value="<?php echo $_POST['desde']; ?>"/>

<input type="text" name="hasta"  class="form-control datepicker" autocomplete="off" style="width:231px; float:left; margin:0 10px 0 0;" placeholder="hasta" value="<?php echo $_POST['hasta']; ?>"/>

<input type="hidden" name="tipo" value="<?php echo $_GET['tipo']; ?>" id="hiddenField" />

<input type="submit" name="button2" id="button" value="Descargar"  class="btn btn-primary" style="float:left;"/>

</form>

<script type="text/javascript">
            $(function() {
                $('.datepicker').datepicker();

            });
</script>
