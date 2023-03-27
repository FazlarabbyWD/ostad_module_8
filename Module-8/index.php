<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostad</title>
</head>
<body>
<h1>Registration Form</h1>
	<form action="register.php" method="post">
		<label for="first_name">First Name:</label>
		<input type="text" id="first_name" name="first_name" required><br><br>
		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		<input type="submit" value="Register">
	</form>
	<?php
		if(isset($_GET['error'])){
			echo '<p style="color:red;">' . $_GET['error'] . '</p>';
		}
		if(isset($_GET['success'])){
			echo '<p style="color:green;">Registration Successful!</p>';
		}
	?>
</body>
</html>