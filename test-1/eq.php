<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment</title>
</head>
<body>
    <div class="container">
        <header>
            <form method="post" action="eq-back.php">
                <input type="text" name="equipment_id" class="search-bar" placeholder="Enter equipment id">
                <button type="submit" name="search_btn">Search</button>
            </form>
	    <a href="eq-end.php">end session</a>
        </header>
        <main>
            <?php
            // Check if session variable is set for equipment details
		session_start();
            if (isset($_SESSION['equipment_details'])) {
                $details = $_SESSION['equipment_details'];
                echo "<section class='equipment-details'>";
                echo "<div class='image-placeholder'>";
                echo "<img src='img/".$_SESSION['image'].".jpg'>";
                echo "</div>";
                echo "<div class='details'>";
                echo "<p><strong>Equipment ID:</strong> " . $details['equipment_id'] . "</p>";
                echo "<p><strong>Name:</strong> " . $details['name'] . "</p>";
                echo "<p><strong>Model No.:</strong> " . $details['model_no'] . "</p>";
                echo "<p><strong>Manufacturer:</strong> " . $details['manufacturer'] . "</p>";
                echo "<p><strong>Cost:</strong> " . $details['cost'] . "</p>";
                echo "</div>";
                echo "</section>";
                unset($_SESSION['equipment_details']); // Clear session variable after displaying details
	    }else if(isset($_SESSION['error_message'])){
		    echo "<p>".$_SESSION['error_message']."</p>";
		    unset($_SESSION['error_message']);
	    }
            ?>
        </main>
    </div>
</body>
</html>

