<?php
function getConnection(){

	//constants for connecting database
	define('DB_HOST','localhost');
	define('DB_USER','Animesh');
	define('DB_PASSWD','123456');
	define('DB_NAME','bccl');
 
	//Creating connection 
	$conn =  new mysqli(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);

	//Check connection
	if($conn->connect_error){
		die('Connection failed: '.$conn->connect_error);
	}
	return $conn;
}
?>
