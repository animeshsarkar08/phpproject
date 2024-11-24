<!DOCTYPE htlml>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inital-sacle=1.0">
	<title>Register Demo</title>
</head>
<body>
	<form action="register-backend.php" method="POST"> 
		<?php include 'register-backend.php' ?>
		<label for="name">Name:</label>
		<input type="text" id="name" name = "name" placeholder = "Enter your name" value= "<?= $name?>">
		<br>	
		<label for="email">Email:</label>
		<input type="text" id="email" name = "email" placeholder = "Enter your email" value = "<?= $email?>">
		<br>	
		<label for="password">Enter password:</label>
		<input type="password" id="password" name = "password" placeholder = "Enter password" value = "">
		<br>
		<label for="confirm-password">Confirm password:</label>
		<input type="password" id="confirm-password" name = "confirm_password" placeholder = "Re-enter password" value ="" >
		<br>
		<input type="submit" name="submit" value="Submit">
		<br>
	</form>
</body>
</html>
