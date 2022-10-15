<?php
include 'config.php';
    if (isset($_GET['delete'])) {
		echo 'done baby';
	$ID = $_GET['delete'];
	mysqli_query($con, "DELETE FROM incident WHERE ID=$ID");
	$_SESSION['message'] = "incident deleted!"; 
	header('location: Viewincident.php');
}
    ?>