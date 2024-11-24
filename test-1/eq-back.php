<?php
session_start(); // Start session to store equipment details

// Check if form is submitted
if (isset($_POST['search_btn'])) {
    // Retrieve equipment ID from form submission
    $equipment_id = $_POST['equipment_id'];

    // Replace with your database connection details
    $servername = "localhost";
    $username = "Animesh";
    $password = "123456";
    $dbname = "bccl";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to fetch equipment details
    $sql = "SELECT * FROM equipment WHERE equipment_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $equipment_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if equipment exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Store equipment details in session variable
        $_SESSION['equipment_details'] = array(
            'equipment_id' => $row['equipment_id'],
            'name' => $row['equipment_name'],
            'model_no' => $row['model_no'],
            'manufacturer' => $row['manufacturer'],
            'cost' => $row['cost']
        );
	$_SESSION['image'] = 'crane';

        // Redirect back to index.php
        header("Location: eq.php");
        exit();
    } else {
        // Equipment not found
        // Redirect back to index.php with error message
        $_SESSION['error_message'] = "No equipment found with ID: " . $equipment_id;
        header("Location: eq.php");
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

