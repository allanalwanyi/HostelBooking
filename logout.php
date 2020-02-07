<?php 
session_start();
session_destroy();
unset($_SESSION['studentname']);
$_SESSION['message'] = "You are now logged Out";
header("location: index.php");

 ?>