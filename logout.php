<?php
//initalizing the session
session_start();

//unset the session variables
session_unset();

//destroy session
session_destroy();

//directed to index page
header('Location: index.php');
exit();
?>
