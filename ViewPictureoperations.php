<?php 	
include 'config.php';

if (isset($_GET['ID'])) {
	
$ID = $_GET['ID'];


$sql = mysqli_query($con,"SELECT  * FROM operations where ID='$ID' ");
$picture = mysqli_fetch_array($sql);

}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>	</title>
 </head>
 <body>
 <div style="height: 100px;"></div>
 <img src="Data/<?php  echo$picture['evidence']; ?>">	
 </body>
 </html>