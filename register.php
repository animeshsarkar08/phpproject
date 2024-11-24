<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href = "register-styles.css">
   </head>
<body>
    <img src="https://www.mpscworld.com/wp-content/uploads/2020/04/bccl-logo.jpg" alt="Logo" class="logo">
    <div class="registration-container">
        <h2>Register</h2>
	<?php 
		if(isset($_SESSION['email_not_found'])){
			echo "<p style='color:red;'>".$_SESSION['email_not_found']."</p>"; 
			unset($_SESSION['email_not_found']);
		}		
	?>
	<form action="register-backend.php" method="POST">
	    <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder = "Enter your name" value= "">
            <?php 
		if(isset($_SESSION['name_error'])){
			echo "<p style='color:red;'>".$_SESSION['name_error']."</p>"; 
			unset($_SESSION['name_error']);
		}		  
	    ?>
	    <label for="email">Email</label>
            <input type="text" id="email" name="email" required placeholder = "Enter your email" value = "">
            <?php 
		if(isset($_SESSION['email_error'])){
			echo "<p style='color:red;'>".$_SESSION['email_error']."</p>"; 
			unset($_SESSION['email_error']);
		}		  
	    ?>
	    <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password" value="">
            <label for="confirm-password">Confirm Password</label>
	    <input type="password" id="confirm-password" name="confirm_password" required placeholder="Re-enter password" value="">
            <?php 
		if(isset($_SESSION['confirm_password_error'])){
			echo "<p style='color:red;'>".$_SESSION['confirm_password_error']."</p>"; 
			unset($_SESSION['confirm_password_error']);
		}		  
	    ?>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>

