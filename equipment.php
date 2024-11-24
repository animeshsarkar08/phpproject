<?php
session_start();
if(!isset($_SESSION['email'])){
	header('Location:index.php');
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="equipment-styles.css">
	<title>Equipment Details</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	
</head>
  <body>
	<?php
	   if(isset($_SESSION['success_message']) && isset($_GET['equipment_id'])){
			echo "<p style='color:green;padding-left:10px;'>".$_SESSION['success_message']."</p>";
			//$_GET['equipment_id'] = 0;
			unset($_SESSION['success_message']);
	    }
	   if(isset($_SESSION['error_message']) && isset($_GET['equipment_id'])){
			echo "<p style='color:red;padding-left:10px;'>".$_SESSION['error_message']."</p>";
			$_GET['equipment_id'] = 0;
			unset($_SESSION['error_message']);
	    }
	    if(isset($_SESSION['category_error']) && isset($_GET['equipment_id'])){
			echo "<p style='color:red;padding-left:10px;'>".$_SESSION['category_error']."</p>";
			$_GET['equipment_id'] = 0;
			unset($_SESSION['category_error']);
	    }
       ?>
 
    <div class="container">
	<header>
	<?php
	   echo "<form action='equipment-backend.php?category=".$_GET['category']."' method='POST' class='header-form'>";
	   echo	"<input type='text' name='equipment_id' class='search-bar' placeholder='Enter equipment id'>";
	   echo "<button type='submit' name='search-btn' class='search-btn'><strong>Search<strong</button>";
	   echo "</form>";
	   //initially parameter equipment_id is set to 0, but as the details are forwarded by backend code 
	   //the URL contains the equipment_id(non-zero) and category
	   if(isset($_GET['equipment_id']) && $_GET['equipment_id'] != 0){
	   	echo "<button onclick=\"location.href='equipment-edit.php?equipment_id=".$_GET['equipment_id']."&category=".$_GET['category']."';\" class='edit-btn'><strong>Edit<strong</button>";// "\" used when we run any javascript code
	   }
	   echo "<button onclick=\"location.href='equipment-add.php';\" class='add-btn'>Add</button>";
	   echo "<button onclick=\"location.href='index.php';\" class='home-btn'>Home</button><br>";

	?>
	</header>
	<main>
		<?php
		if(isset($_SESSION['equipment_details'])){
			$details = $_SESSION['equipment_details'];
		echo "<section class='equipment-details'>";
			echo "<div class='image-placeholder'>";
				 if($_GET['category'] == "1")
					echo "<img src='Machines/".$details['type'].".jpg'>";
				   else if($_GET['category'] == "2")
					echo "<img src='Vehicles/".$details['type'].".jpg'>";
			echo"</div>";
			echo"<div class='details'>";
				echo "<p><strong>Equipment ID:</strong>".$details['equipment_id']."</p>";
				echo "<p><strong>Name:</strong>".$details['equipment_name']."</p>";
				echo"<p><strong>Model No.:</strong>".$details['model_no']. "</p>";
				echo "<p><strong>Manufacturer:</strong>".$details['manufacturer']."</p>";
				echo "<p><strong>Cost:</strong>".$details['cost']."</p>";
			echo"</div>";
		echo "</section>";
		echo"<section class='additional-info'>";
			echo"<p><strong>Purchase Date:</strong>".$details['purchase_date']."</p>";
			echo"<p><strong>Warranty Expiration Date:</strong>".$details['warranty_expiration_date']."</p>";
			echo"<p><strong>Location:</strong>".$details['location']."</p>";
			echo"<p><strong>Last Maintenance Date:</strong>".$details['last_maintenance_date']."</p>";
			echo"<p><strong>Next Maintenance Date:</strong>".$details['next_maintenance_date']."</p>";
			echo"<p><strong>Last Maintenance Cost:</strong>".$details['last_maintenance_cost']."</p>";
			echo"<p><strong>Current Maintenance Cost:</strong>".$details['current_maintenance_cost']."</p>";
		        $cost_status = $details['current_maintenance_cost'] - $details['last_maintenance_cost'];  	
			if($cost_status > 0) 
				echo"<p><strong>Maintenance Cost Difference:</strong>".$cost_status."<i style='color:red;'> Increased</i></p>";
			else if($cost_status < 0) 
				echo"<p><strong>Maintenance Cost Difference:</strong>".$cost_status."<i style='color:#00FF00;'> Decreased</i></p>";
			else   
			    echo"<p><strong>Maintenance Cost Difference:</strong>".$cost_status."<i style='color:#CCFF66;'> Unchanged</i></p>";
				
   
			echo"<p><strong>Usage Hours:</strong>".$details['usage_hours']."</p>";
			echo"<p><strong>Power Consumption:</strong>".$details['power_consumption']."kW/hr</p>";
			if($details['status'])
				echo"<p><strong>Status:</strong>Not Available</p>";
			else 
				echo"<p><strong>Status:</strong>Available</p>";
	   		echo "<button onclick=\"location.href='equipment-delete-backend.php?equipment_id=".$details['equipment_id']."';\" class='delete-btn'>Delete Equipment</button><br>";
		echo"</section>";
		}
		unset($_SESSION['equipment_details']);	   
	?>	
	</main>
    </div>
 </body>
</html>
