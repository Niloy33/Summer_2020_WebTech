<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['sname'];
		if($name == ""){ echo "name is required";}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name Form</title>
</head>
<body>

	<form method="post">
		Name: <input type="text" name="sname" value="" placeholder=""><?php if(!isset($name)){echo "cannot be empty";}?>
		<br> 
		Email: <input type="Email" name="id" value=""><?php if(!isset($name)){echo "cannot be empty";}?> <br>
		<input type="submit" name="" value="Submit">
	</form>
</body>
</html>