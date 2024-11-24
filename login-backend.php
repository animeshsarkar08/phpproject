<?php	
	$email = "";
	if(isset($_POST['submit'])){
		$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
		$password = $_POST['password'];

		if(empty($email) || empty($password)){
		//	$error = "Email and Password are required!";
			header('Location: login.php');
			exit();
		}
		else{
			session_start();
			include "database/db_conn.php";
			//stablishing database connection
			$db_conn = getConnection();

			//preparing the query
			//prepare() takes SQL query with placeholders(e.g. ?) 
			//it separates SQL code with data, preventing SQL injection attack
			//return an "mysqli_stmt object" use to bind parameters,execute and retrieve results
			$query = $db_conn->prepare("SELECT id,name,password,date FROM users WHERE email = ?");

			//passing required variables to the query
			$query->bind_param('s',$email);

			//execute query
			$query->execute();

			//reading the results
			$query->bind_result($id,$get_name,$get_password,$get_date);

			//fetch values = check if we get at least one result
			//$query->fetch() -> its a loop which fetches the next row in the result set until there
			//no row left to be fetched, returns true if there is a row next otherwise false 
			if($query->fetch()){
				//verifing password
				//password = user provided passwd
				//get_password = hashed passwd stored in dbms
				//hash(password) == get_password (verified)
				if(password_verify($password,$get_password)){	
					//create session variables
					$_SESSION['id'] = $id;
					$_SESSION['name'] = $get_name;
					$_SESSION['email'] = $email;
					$_SESSION['date'] = $get_date;
					//closing query hence not more query will be run
					$query->close();
					//closing database connection	
					$db_conn->close();
					//redirect to index page
					header('Location: index.php');
					exit();
				}
				else{
					$_SESSION['password_error'] = "Incorrect password.";
					header('Location: login.php');
					exit();
				}
			}else{
				$_SESSION['email_not_found'] = "Email is not registered.";
				header('Location: register.php');
				exit();

			}
		}
	}
?>
			
