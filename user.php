<?php 	
session_start();
include 'config.php';


if (isset($_SESSION['userName'])) {

$user_Name = $_SESSION['userName'];



$query = mysqli_query($con,"SELECT * FROM users WHERE userName='$user_Name' ");
$name = mysqli_fetch_array($query);

$my  =  $name['1']; 








}









 ?>