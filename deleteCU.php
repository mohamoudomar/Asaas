<?php 
include 'config.php';
    if (isset($_GET['delete'])) {
	$ID = $_GET['delete'];
	mysqli_query($con, "DELETE FROM caution WHERE ID=$ID");
	$_SESSION['message'] = "record deleted!"; 
	header('location: Viewcaution.php');
}
    ?>