<?php

	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="login_check.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User Id</td>
					<td><input type="number" name=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="Login" name="Login" value="Login"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="Register" name="Register" value="Register"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
<?php
if(isset($_SESSION['email']))
{
    if($_SESSION['type'] == "admin")
    {
       header('location:profile_admin.php');
    }
    else if($_SESSION['type'] == "user")
    {
       header('location:profile_user.php');
    }
}
?>