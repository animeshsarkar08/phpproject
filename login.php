<?php
session_start();
if(isset($_SESSION['email'])){
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href = "login-styles.css">
</head>
<body>
    <img src="https://www.mpscworld.com/wp-content/uploads/2020/04/bccl-logo.jpg" alt="Logo" class="logo">
    <div class="login-container">
        <h2>Login</h2>
	<form action="login-backend.php" method="POST"> 
	    <label for="username">Username</label>
            <input type="text" id="username" name="email" placeholder="Enter your email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>
	     <?php 
	  
		if(isset($_SESSION['password_error'])){
			echo "<p style='color:red;'>".$_SESSION['password_error']."</p>"; 
			unset($_SESSION['password_error']);
		}
		if(isset($_SESSION['id'])){
			echo "<p style='color:green;'>Successfully registered with ID: ".$_SESSION['id']."</p>"; 
			unset($_SESSION['id']);
			unset($_SESSION['name']);
			unset($_SESSION['email']);
			unset($_SESSION['date']);
		}	
	     ?>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <input type="submit" name="submit" value="Login">
            <a href="register.php" class="signup">Don't have an account? Sign up</a>
        </form>
    </div>
</body>
</html>
