<?php 

session_start();

$index = $_GET['index'];

// $_SESSION['phone'][$index];


unset($_SESSION['phone'][$index]);

$_SESSION['message']= "Delete succesfully";

header('location:./index.php');

?>