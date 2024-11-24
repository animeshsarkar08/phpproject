<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
//HTML forms do not natively support the PUT method, 
//hence need to use a workaround to send PUT requests.
//Therefore, using POST method will be easier to update details
// Check if form is submitted
if (isset($_POST['submit'])) {
    include "database/db_conn.php";
    $conn = getConnection();

    // Prepare the update query
    $sql = "UPDATE equipment SET
        equipment_name = ?,
        model_no = ?,
        manufacturer = ?,
        cost = ?,
        purchase_date = ?,
        warranty_expiration_date = ?,
        location = ?,
        last_maintenance_date = ?,
        next_maintenance_date = ?,
        usage_hours = ?,
        power_consumption = ?,
        dept_id = ?,
        category_id = ?,
        status = ?,
        type = ?,
        last_maintenance_cost = ?,
        current_maintenance_cost = ?
        WHERE equipment_id = ?";

    $query = $conn->prepare($sql);

    if ($query === false) {
        $_SESSION['error_message'] = 'Prepare failed: ' . $conn->error;
	header("Location: equipment.php?equipment_id=".$_POST['equipment_id']."&category=".$_GET['category']);
        exit();
    }

    // Bind parameters
    $query->bind_param(
        "sssdsssssddiiisddi",
        $_POST['equipment_name'],
        $_POST['model_no'],
        $_POST['manufacturer'],
        $_POST['cost'],
        $_POST['purchase_date'],
        $_POST['warranty_expiration_date'],
        $_POST['location'],
        $_POST['last_maintenance_date'],
        $_POST['next_maintenance_date'],
        $_POST['usage_hours'],
        $_POST['power_consumption'],
        $_POST['dept_id'],
        $_POST['category_id'],
        $_POST['status'],
        $_POST['type'],
        $_POST['last_maintenance_cost'],
        $_POST['current_maintenance_cost'],
        $_POST['equipment_id']
    );

    // Execute statement
    if ($query->execute()) {
        $_SESSION['success_message'] = 'Equipment updated successfully!';
	header("Location: equipment.php?equipment_id=".$_POST['equipment_id']."&category=".$_GET['category']);
    } else {
        $_SESSION['error_message'] = 'Execute failed: ' . $query->error;
	header("Location: equipment-edit.php?equipment_id=".$_POST['equipment_id']."&category=".$_GET['category']);
    }

    // Close statement and connection
    $query->close();
    $conn->close();
    exit();
}
?>

