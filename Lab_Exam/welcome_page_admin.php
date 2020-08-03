<?php
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "OK"){

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin's home page</title>
</head>
<body>
	<h1>Welcome Bob!</h1><a href="logout.php"> logout</a>
	<a href="change_password.php">Change Password</a>
	<a href="view_users.php">View Users</a>
	<a href="profile.php">Profile</a>
</body>
</html>


<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php');
	}
?>