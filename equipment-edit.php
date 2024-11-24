<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

// Check if equipment_id is provided
if (!isset($_GET['equipment_id'])) {
    $_SESSION['error_message'] = "Equipment ID is required.";
    header("Location: equipment.php?equipment_id=0&category=".$_GET['category']);
    exit();
}

include "database/db_conn.php";
$conn = getConnection();

// Fetch the equipment details
$equipment_id = $_GET['equipment_id'];
$sql = "SELECT * FROM equipment WHERE equipment_id = ?";
$query = $conn->prepare($sql);
$query->bind_param("s", $equipment_id);
$query->execute();
$result = $query->get_result();

/*if ($result->num_rows === 0) {*/
/*    $_SESSION['error_message'] = "No equipment found with the given ID.";*/
/*    header("Location: equipment.php?equipment_id=0&category=".$_GET['category']);*/
/*}*/

$equipment = $result->fetch_assoc();
$query->close();
$conn->close();
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="equipment-edit-styles.css">
    <title>Edit Equipment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Edit Equipment</h1>
        </header>
        <main>
	<form action='equipment-edit-backend.php?equipment_id=<?php echo $_GET['equipment_id']; ?>&category=<?php echo $_GET['category']; ?>' method='POST' class='equipment-form'>
                <label for="equipment_id">Equipment ID:</label>
                <input type="text" id="equipment_id" name="equipment_id" value="<?php echo htmlspecialchars($equipment['equipment_id']); ?>" readonly>

                <label for="equipment_name">Name:</label>
                <input type="text" id="equipment_name" name="equipment_name" value="<?php echo htmlspecialchars($equipment['equipment_name']); ?>" required>

                <label for="model_no">Model No.:</label>
                <input type="text" id="model_no" name="model_no" value="<?php echo htmlspecialchars($equipment['model_no']); ?>" required>

                <label for="manufacturer">Manufacturer:</label>
                <input type="text" id="manufacturer" name="manufacturer" value="<?php echo htmlspecialchars($equipment['manufacturer']); ?>" required>

                <label for="cost">Cost (INR):</label>
                <input type="number" id="cost" name="cost" step="0.01" value="<?php echo htmlspecialchars($equipment['cost']); ?>" required>

                <label for="purchase_date">Purchase Date:</label>
                <input type="date" id="purchase_date" name="purchase_date" value="<?php echo $equipment['purchase_date']; ?>" required>

                <label for="warranty_expiration_date">Warranty Expiration Date:</label>
                <input type="date" id="warranty_expiration_date" name="warranty_expiration_date" value="<?php echo htmlspecialchars($equipment['warranty_expiration_date']); ?>" required>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($equipment['location']); ?>" required>

                <label for="last_maintenance_date">Last Maintenance Date:</label>
                <input type="date" id="last_maintenance_date" name="last_maintenance_date" value="<?php echo htmlspecialchars($equipment['last_maintenance_date']); ?>">

                <label for="next_maintenance_date">Next Maintenance Date:</label>
                <input type="date" id="next_maintenance_date" name="next_maintenance_date" value="<?php echo htmlspecialchars($equipment['next_maintenance_date']); ?>">

                <label for="last_maintenance_cost">Last Maintenance Cost(INR):</label>
                <input type="number" id="last_maintenance_cost" name="last_maintenance_cost" value="<?php echo htmlspecialchars($equipment['last_maintenance_cost']); ?>">

                <label for="current_maintenance_cost">Current Maintenance Cost(INR):</label>
                <input type="number" id="current_maintenance_cost" name="current_maintenance_cost" value="<?php echo htmlspecialchars($equipment['current_maintenance_cost']); ?>">

                <label for="usage_hours">Usage Hours:</label>
                <input type="number" id="usage_hours" name="usage_hours" step="0.1" value="<?php echo htmlspecialchars($equipment['usage_hours']); ?>" required>

                <label for="power_consumption">Power Consumption (kW/hr):</label>
                <input type="number" id="power_consumption" name="power_consumption" step="0.1" value="<?php echo htmlspecialchars($equipment['power_consumption']); ?>" required>

                <label for="dept">Department:</label>
                <select id="dept" name="dept_id" required>
                    <option value="1" <?php echo $equipment['dept_id'] == 1 ? 'selected' : ''; ?>>Dhanbad</option>
                    <option value="2" <?php echo $equipment['dept_id'] == 2 ? 'selected' : ''; ?>>Jharia</option>
                    <option value="3" <?php echo $equipment['dept_id'] == 3 ? 'selected' : ''; ?>>Katras</option>
                    <option value="4" <?php echo $equipment['dept_id'] == 4 ? 'selected' : ''; ?>>Bastakola</option>
                    <option value="5" <?php echo $equipment['dept_id'] == 5 ? 'selected' : ''; ?>>Kusunda</option>
                </select>

                <label for="category">Category:</label>
                <select id="category" name="category_id" required>
                    <option value="1" <?php echo $equipment['category_id'] == 1 ? 'selected' : ''; ?>>Heavy Machineries</option>
                    <option value="2" <?php echo $equipment['category_id'] == 2 ? 'selected' : ''; ?>>Vehicles</option>
                    <option value="3" <?php echo $equipment['category_id'] == 3 ? 'selected' : ''; ?>>Electrical equipment</option>
                    <option value="4" <?php echo $equipment['category_id'] == 4 ? 'selected' : ''; ?>>Product Equipment</option>
                    <option value="5" <?php echo $equipment['category_id'] == 5 ? 'selected' : ''; ?>>Tools and Instruments</option>
                    <option value="6" <?php echo $equipment['category_id'] == 6 ? 'selected' : ''; ?>>Safety Equipment</option>
                </select>

                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="0" <?php echo $equipment['status'] == 0 ? 'selected' : ''; ?>>Available</option>
                    <option value="1" <?php echo $equipment['status'] == 1 ? 'selected' : ''; ?>>Not Available</option>
                </select>

                <label for="type">Type:</label>
                <select id="type" name="type" required>
                    <option value="truck" <?php echo $equipment['type'] == 'truck' ? 'selected' : ''; ?>>Truck</option>
                    <option value="crane" <?php echo $equipment['type'] == 'crane' ? 'selected' : ''; ?>>Crane</option>
                    <option value="bucket-wheel excavator" <?php echo $equipment['type'] == 'bucket-wheel excavator' ? 'selected' : ''; ?>>Bucket-Wheel Excavator</option>
                    <option value="scraper" <?php echo $equipment['type'] == 'scraper' ? 'selected' : ''; ?>>Scraper</option>
                </select>

                <button type="submit" name="submit" class="submit-btn">Update Equipment</button>
            </form>
        </main>
    </div>
</body>
</html>

