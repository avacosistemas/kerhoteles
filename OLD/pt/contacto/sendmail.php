<?php
if(isset($_POST['submit'])){
	$target_file = basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if ($uploadOk == 0) {
			echo "No";
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "Si";
		} else {
			echo "";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<body>
<form action="<?php echo basename($_SERVER["SCRIPT_FILENAME"], '.php').'.php'; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="UP" name="submit">
</form>
</body>
</html>