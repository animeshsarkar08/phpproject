<?php
function getConnection(){

	//constants for connecting database
	define('DB_HOST','mysql.railway.internal');
	define('DB_USER','root');
	define('DB_PASSWD','GgylfbpghmVgQUYtvKUXUdYOxlbLYiSM');
	define('DB_NAME','railway');
 
	//Creating connection 
	$conn =  new mysqli(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);

	//Check connection
	if($conn->connect_error){
		die('Connection failed: '.$conn->connect_error);
	}
	return $conn;
}
?>
