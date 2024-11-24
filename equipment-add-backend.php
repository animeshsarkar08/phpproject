<?php
session_start();


if(isset($_POST['submit'])){
	include "database/db_conn.php";
	$conn = getConnection();

     // Prepare and bind
     $sql = "INSERT INTO equipment (equipment_id, equipment_name, model_no, manufacturer, cost, purchase_date, warranty_expiration_date, location, last_maintenance_date, next_maintenance_date, usage_hours, power_consumption,dept_id, category_id, status, type, last_maintenance_cost, current_maintenance_cost) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?)" ;
     $query = $conn->prepare($sql);
     
     if ($query === false) {
         $_SESSION['error_message'] = 'Prepare failed: ' . $conn->error;
         header('Location: equipment-add.php');
         exit();
     }
     
     // Bind parameters
     $query->bind_param(
         "isssdsssssddiiisdd",// data types
         $_POST['equipment_id'],
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
         $_POST['current_maintenance_cost']
     );
     
     // Execute statement
     // execute() -> returns boolean
     if ($query->execute()) {
         $_SESSION['success_message'] = 'Equipment added successfully!';
     	 header("Location: equipment.php?equipment_id=".$_POST['equipment_id']."&category=".$_POST['category_id']);
     } else {
         $_SESSION['error_message'] = 'Execute failed: ' . $query->error;
         header('Location: equipment-add.php');
     }
     
     // Close statement and connection
     $query->close();
     $conn->close();
     exit();
}
?>

