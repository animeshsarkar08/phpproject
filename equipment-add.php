<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location:index.php');
    exit();
}

//Setting the equipment_id for new equipment
include "database/db_conn.php";
$conn = getConnection();

// Fetch the last equipment_id
$sql = "SELECT MAX(equipment_id) AS last_id FROM equipment";
$result = $conn->query($sql);

if ($result === false) {
    $_SESSION['error_message'] = 'Database query failed: ' . $conn->error;
    header('Location: equipment-add.php');
    exit();
}

$row = $result->fetch_assoc();
$next_id = $row['last_id'] + 1;
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="equipment-add-styles.css">
    <title>Add New Equipment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Add New Equipment</h1>
        </header>
        <main>
            <form action="equipment-add-backend.php" method="POST" class="equipment-form">
                <label for="equipment_id">Equipment ID:</label>
                <input type="text" id="equipment_id" name="equipment_id" value="<?php echo $next_id; ?>" readonly>

                <label for="equipment_name">Name:</label>
                <input type="text" id="equipment_name" name="equipment_name" required>

                <label for="model_no">Model No.:</label>
                <input type="text" id="model_no" name="model_no" required>

                <label for="manufacturer">Manufacturer:</label>
                <input type="text" id="manufacturer" name="manufacturer" required>

                <label for="cost">Cost(INR):</label>
                <input type="number" id="cost" name="cost" step="0.01" required>

                <label for="purchase_date">Purchase Date:</label>
                <input type="date" id="purchase_date" name="purchase_date" required>

                <label for="warranty_expiration_date">Warranty Expiration Date:</label>
                <input type="date" id="warranty_expiration_date" name="warranty_expiration_date" required>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>

                <label for="last_maintenance_date">Last Maintenance Date or Installation Date:</label>
                <input type="date" id="last_maintenance_date" name="last_maintenance_date">

                <label for="next_maintenance_date">Next Maintenance Date:</label>
                <input type="date" id="next_maintenance_date" name="next_maintenance_date">

                <label for="last_maintenance_cost">Last Maintenance Cost:</label>
                <input type="number" id="last_maintenance_cost" name="last_maintenance_cost" value="0" readonly>

                <label for="current_maintenance_cost">Current Maintenance Cost or Installation Cost:</label>
                <input type="number" id="current_maintenance_cost" name="current_maintenance_cost">

                <label for="usage_hours">Usage Hours:</label>
                <input type="number" id="usage_hours" name="usage_hours" step="0.1" required>

                <label for="power_consumption">Power Consumption (kW/hr):</label>
                <input type="number" id="power_consumption" name="power_consumption" step="0.1" required>

                <label for="dept">Department:</label>
                <select id="dept" name="dept_id" required>
                    <option value="1">Dhanbad</option>
                    <option value="2">Jharia</option>
                    <option value="3">Katras</option>
                    <option value="4">Bastakola</option>
                    <option value="5">Kusunda</option>
                </select>

                <label for="category">Category:</label>
                <select id="category" name="category_id" required>
                    <option value="1">Heavy Machineries</option>
                    <option value="2">Vehicles</option>
                    <option value="3">Electrical equipment</option>
                    <option value="4">Product Equipment</option>
                    <option value="5">Tools and Instruments</option>
                    <option value="6">Safety Equipment</option>
                </select>

                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="0">Available</option>
                    <option value="1">Not Available</option>
                </select>

                <label for="type">Type:</label>
                <select id="type" name="type" required>
                    <option value="truck">Truck</option>
                    <option value="crane">Crane</option>
                    <option value="bucket-wheeler excavators">Bucket-Wheeler Excavators</option>
                    <option value="scraper" >Scraper</option>
		</select>

                <button type="submit" name="submit" class="submit-btn">Add Equipment</button>
            </form>
        </main>
    </div>
</body>
</html>
