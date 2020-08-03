<?php
	
	session_start();
	
	if(isset($_POST['Register'])){

		$uname 		      = $_POST['uname'];
		$email 		      = $_POST['email'];
		$password         = $_POST['password'];
		$id 	          = $_POST['id'];
		$confirm_password = $_POST['confirm_password'];

		if(empty($uname) || empty($password) || empty($email) || empty($id) || empty($confirm_password)){
			echo "null submission found!";
		}else{
			$_SESSION['uname'] 		= $uname;
			$_SESSION['password'] 	= $password;
			$_SESSION['email'] 		= $email;
			$_SESSION['id'] 		= $id;
			$_SESSION['confirm_password'] 	= $password;


			echo "done!";
		}	

	}else{
		echo "invalid request";
		header('location: registration.html');
	}




?>