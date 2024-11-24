<?php 
session_start();

$logged_in = false;
if(isset($_SESSION['email'])){
	$logged_in = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Maintenance Tracker</title>
    <link rel="stylesheet" href="header-styles.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
</head>
<body>
    <nav class="navbar">
	<div class="navbar-logo">
            <img src="https://www.mpscworld.com/wp-content/uploads/2020/04/bccl-logo.jpg" alt="Logo" class="logo">
        </div>
	<div class="navbar-center">
	    <h1 class="tracker-title">Equipment Maintenance Tracker</h1>
        </div>
        <div class="navbar-right">
	   <!-- <form>
        	<div class ="search-box">
                	<input type ="text" class ="txt" placeholder ="Search Here...">
           	  	<a class ="btn"><i class="fa-solid fa-magnifying-glass"></i></a>
        	</div>
	    </form> -->
			<?php if($logged_in){
			?>
			   <a href="logout.php">Logout</a>	
			<!--     <select>
				<option><a href="#">Admin</a></option>
				<option><a href="logout.php">Logout</a></option>
			     </select>
			-->
			<?php } ?>
			<?php if(!($logged_in)){?><a href="index.php">Home</a><?php }?>
			<?php if(!($logged_in)){?><a href="login.php">Login</a><?php }?>
			<?php if(!($logged_in)){?><a href="register.php">Register</a><?php }?>
			<a href="aboutus.php">AboutUs</a>
			<a href="contactus.php">ContactUs</a>
			<a href="our-team.php">Our Team</a>
        </div>
    </nav>
    
</body>
</html>


