<?php 

session_start();

// print_r($_POST);

$data =['id'=>$_POST['id'], 'title'=>$_POST['title']];

$_SESSION['phone'][]= $data;

$_SESSION['message']= "successfully created";

// echo "<pre>";

// print_r($_SESSION['phone']);

header('location:./index.php');
?>