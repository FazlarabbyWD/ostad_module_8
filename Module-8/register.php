<?php
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
		
		//Validate all fields
		if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])){
			header("Location: index.php?error=All fields are required.");
			exit();
		}
		
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			header("Location: index.php?error=Invalid email format.");
			exit();
		}
		
		if($_POST['password'] != $_POST['confirm_password']){
			header("Location: index.php?error=Passwords do not match.");
			exit();
		}
		
		header("Location: index.php?success=1");
		exit();
	}
	else{
		header("Location: index.php");
		exit();
	}
?>
