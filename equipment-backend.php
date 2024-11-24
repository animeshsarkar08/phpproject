<?php
session_start(); // Start session to store equipment details

// Check if form is submitted
if (isset($_POST['search-btn'])) {
    // Retrieve equipment ID from form submission
	$equipment_id = $_POST['equipment_id'];

   include "database/db_conn.php";
    $conn = getConnection();

    // Prepare SQL statement to fetch equipment details
    $sql = "SELECT * FROM equipment WHERE equipment_id = ?";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $equipment_id);
    $query->execute();
    $result = $query->get_result();//stores all the resultant rows i.e. resultant set

    // Check if equipment exists
    if ($result->num_rows > 0) {
	    //fetch_assoc() like a loop retrieve each rows from the "result" variables
	    //until there no row left in result variable
	    $row = $result->fetch_assoc();

        // Store equipment details in session variable
        $_SESSION['equipment_details'] = array(
            'equipment_id' => $row['equipment_id'],
            'equipment_name' => $row['equipment_name'],
            'model_no' => $row['model_no'],
            'manufacturer' => $row['manufacturer'],
            'cost' => $row['cost'],
            'purchase_date' => $row['purchase_date'],
            'warranty_expiration_date' => $row['warranty_expiration_date'],
            'location' => $row['location'],
            'last_maintenance_date' => $row['last_maintenance_date'],
           'next_maintenance_date' => $row['next_maintenance_date'],
            'usage_hours' => $row['usage_hours'],
            'power_consumption' => $row['power_consumption'],
            'dept_id ' => $row['dept_id'],
            'category_id' => $row['category_id'],
            'status' => $row['status'],
            'type' => $row['type'],
            'last_maintenance_cost' => $row['last_maintenance_cost'],
            'current_maintenance_cost' => $row['current_maintenance_cost']
	);
	//If that partucular equipment does not belong to that specified category it will not display any details
	if(isset($_SESSION['equipment_details'])){
		if($_GET['category'] != $_SESSION['equipment_details']['category_id']){
			$_SESSION['category_error']= "The equipment doesnot belong to this specified category.";
			unset($_SESSION['equipment_details']);
		}
	}

    } else {
        // Equipment not found
        // Redirect back to index.php with error message
        $_SESSION['error_message'] = "No equipment found with ID: " . $equipment_id;
     }
    // Close statement and connection
    $query->close();
    $conn->close();
    header("Location: equipment.php?equipment_id=".$equipment_id."&category=".$_GET['category']);
    exit();
}

?>


