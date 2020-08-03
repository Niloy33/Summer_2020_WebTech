<?php
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "OK"){

?>


<!DOCTYPE html>
<html>
<head>
	<title>User's home page</title>
</head>
<body>
	<h1>Welcome Anne!</h1><a href="logout.php"> logout</a>
	<a href="change_password.php">Change Password</a>
	<a href="profile.php">Profile</a>
	
</body>
</html>