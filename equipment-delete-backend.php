<?php
session_start(); // Start the session

// Check if 'equipment_id' is set in the request
if (isset($_GET['equipment_id'])) {
    // Retrieve the equipment_id from the GET request
    $equipment_id = $_GET['equipment_id'];

    // Validate and sanitize input (basic example, adapt as needed)
    $equipment_id = filter_var($equipment_id, FILTER_SANITIZE_NUMBER_INT);

    // Include database connection file
    include "database/db_conn.php";
    
    // Get database connection
    $conn = getConnection();

     // Prepare SQL statement to check if equipment exists
    $checkSql = "SELECT COUNT(*),category_id FROM equipment WHERE equipment_id = ?";
    $checkQuery = $conn->prepare($checkSql);
    $checkQuery->bind_param("i", $equipment_id);
    $checkQuery->execute();
    $checkQuery->bind_result($count,$category);
    $checkQuery->fetch();
    $checkQuery->close();

    if ($count > 0) {
        // Prepare SQL statement to delete equipment
        $sql = "DELETE FROM equipment WHERE equipment_id = ?";
        $query = $conn->prepare($sql);
        $query->bind_param("i", $equipment_id);

        // Execute the query and check for success
        if ($query->execute()) {
            $_SESSION['success_message'] = "Equipment deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Error deleting equipment: " . $conn->error;
        }

        // Close the statement
        $query->close();
    } else {
        $_SESSION['error_message'] = "Equipment does not exist.";
    }

    // Close the connection
    $conn->close();
} else {
    $_SESSION['error_message'] = "No equipment ID provided.";
}

// Redirect back to the previous page or a specific page
header("Location: equipment.php?category=".$category);
exit();
?>

