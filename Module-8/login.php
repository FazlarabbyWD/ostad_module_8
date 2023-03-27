<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostad Login</title>
</head>
<body>
<h1>Login Form</h1>
	<form action="welcome.php" method="post">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Login">
	</form>
	<?php
		if(isset($_GET['error'])){
			echo '<p style="color:red;">' . $_GET['error'] . '</p>';
		}
	?>
</body>
</html>