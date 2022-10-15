 <?php
 session_start();	
include 'config.php';
include 'Navbar.php';
//Navbar();

if (isset($_POST['Login']))
{
	

$Email = $_POST['Email'];
$Password = $_POST['Password'];


echo "btn is ok";



	
if ( !empty($Email) && !empty($Password)) {
	
	$sql = mysqli_query($con,"SELECT * FROM Users WHERE Email='$Email' AND 
		Password='$Password'");
	$check = mysqli_num_rows($sql);
	if ($check ==1) {
		
		$_SESSION['Email'] = $Email;
		header("location: dash.php");
	}
else
{

	//echo mysqli_error($con);
	header("location:login.php?message=userName or Password is invalid");
}



}







}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<div style="height: 86px;"></div>
 <div class="container">
<?php if (isset($_GET['message'])): ?>
	
   <div class="col-md-8 col-md-offset-2">
   	 <h4 class="alert alert-warning"><?php 	$sms = $_GET['message']; 
   	 echo$sms; ?></h4>
   </div>
	
<?php endif ?>
 	<div class="col-md-8 col-md-offset-2" style="border: 1px solid green;border-radius: 10px;">
 		<div class="text text-center text-success panel-heading">
 			<h1><span class="fa fa-user-circle"></span> Sign-in Account</h1>
 		</div>
 		<div class="panel-body">
 			<form class="form-horizontal" method="POST">
 				
 				 <div class="form-group">
 				 	<label class="control-label col-md-2">Email</label>
 				 	 <div class="col-md-8">
 				 	 	<input placeholder="Enter Email" type="Email" name="Email" class="form-control">
 				 	 	<?php if (isset($_POST['Save'])): ?>
 					 	 	<?php if (empty($Email)): ?>
 					 	 		<span class="fa fa-times text text-danger">
 					 	 			* Email is required 
 					 	 		</span>
 					 	 	<?php endif ?>
 					 	 <?php endif ?>
 				 	 </div>
 				 </div>
 				 <div class="form-group">
 				 	<label class="control-label col-md-2">Password</label>
 				 	 <div class="col-md-8">
 				 	 	<input placeholder="Enter Password" type="Password" name="Password" class="form-control">
 				 	 	<?php if (isset($_POST['Save'])): ?>
 					 	 	<?php if (empty($Password)): ?>
 					 	 		<span class="fa fa-times text text-danger">
 					 	 			* Password is required 
 					 	 		</span>
 					 	 	<?php endif ?>
 					 	 <?php endif ?>
 				 	 </div>
 				 </div>
 				 <div class="form-group">
 				 	<div class="col-md-8 col-md-offset-2">
 				 		<button style="border-radius: 10px;" class="btn btn-success btn-lg" name="Login">Login</button>
 				 	</div>
 				 </div>
 			</form>
 		</div>
 	</div>
 </div>
</body>
</html>

