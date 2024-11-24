<?php
	session_start();

	function test_input($data) {
   		 $data = trim($data);// Remove extra spaces from the beginning and end
		 $data = stripslashes($data);// Remove backslashes
   		 $data = htmlspecialchars($data); // Convert special characters to HTML entities
    		 return $data;
	}
	//htmlspecialchars() -> used to prevent cross-site scripting(XSS) attacks by 
	//ensuring special chars(<,>,$,&,etc) have specific meaning in HTML, hence the function 
	//ensures that these chars ecoded displayed as plaintext.


	//checking if user is already logged in or not
	if(isset($_SESSION['email'])){
		//since if their is exit email session variable this means user is logged in
		header('Location: index.php');
		exit();
	}
	
	$name ="";
	$email ="";
	$password ="";
	$confirm_password ="";
	//create a connection for table
	include 'database/db_conn.php';
	$db_conn = getConnection();
if(isset($_POST['submit'])){
		//Sanitization using filter_var()
		//sanitizing -> process of removing and cleaning unwanted or harmful chars
		// from user input ensuring safe to process and display
	        /*
		$number="394@843";
		var_dump($number);//string(7) "394@843"
		$number_s = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
		var_dump($number_s);//string(6) "394843" */
		$name = filter_var($_POST['name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
	

        $name = test_input($_POST['name']);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $_SESSION['name_error'] = 'Only letters and white space allowed in name';
	    $error = true;
        }

    // Validate Email
            $email = test_input($_POST['email']);
        // Check if email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email_error'] = 'Invalid email format';
	    $error = true;
        }
	//sql query
	$sql = "SELECT id FROM users WHERE email = ?"; 
	//checking for duplicate email-id
	$query = $db_conn->prepare($sql);

	//set parameters to the SQL query
	$query->bind_param("s",$email);//"s" = is for string

	$query->execute();

	//stores the result of the query
	$query->store_result();

	//if the no. of rows in result table > 0 than the email is already registered
	if($query->num_rows > 0){
		$_SESSION['email_error'] = "Email already exists";
		$error = true;
	}
	//closing the SQL query or statement
	$query->close();

      //Validate Password
      $password = test_input($_POST['password']);


   	//Validate Confirm Password
        $confirm_password = test_input($_POST['confirm_password']);
        if ($password !== $confirm_password) {
            $_SESSION['confirm_password_error'] = 'Passwords do not match';
	    $error = true;
        }

    // If no error validation, process further
    if (!$error) {
       //hashing the passwd 
	$password = password_hash($password,PASSWORD_DEFAULT);	
	$date = date('Y-m-d');
	
	//the sql query 
	$sql = "INSERT INTO users (name,email,password,date) VALUES (?,?,?,?)"; 
	//prepare query
	$query = $db_conn->prepare($sql);

	//bind variables to the prepared query as parmeters
	//each 's' represents each value i.e. string for integer it would be 'i'
	$query->bind_param('ssss',$name,$email,$password,$date);

	//execute query
	$query->execute();

	//verfied by insert id
	//insert_id retrives the AUTO_INCREMENT value of the newly added user form the table
	$id = $query->insert_id;

	$query->close();
	//assigning session variables
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	$_SESSION['date'] = $date;
	//close the connection
	$db_conn->close();

        // You may redirect the user to another page or do additional processing
	header("Location: login.php");
	exit();
	 
    }else{
	    $db_conn->close();
	    //if error in registration 
	    header("Location: register.php");
	    exit();
    }
}



?>

