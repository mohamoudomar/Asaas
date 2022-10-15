<?php
session_start();
include 'config.php';

error_reporting(0);
session_start();
if(isset($_SESSION['userName'])){
    header('location: home.php');
}

if (isset($_POST['Login'])) {

    
	$userName = $_POST['userName'];
	$Password = $_POST['Password'];

	$sql = "SELECT * FROM users WHERE userName='$userName' AND Password='$Password'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['userName'] = $row['Password'];
		header("Location: Home.php");
	} else {
        
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

     <!-- prevents going back to login page without loging out 
	<script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack()",0);
         window.onunload-function(){null;}
    </script> -->

	<title>Asaas - Log in </title>

<!-- background image -->
<style>


body {
	background-image: url('img/backsvg.svg');
}



	</style>
<!-- end -->

	  <!-- login footer styling -->
	<style>
    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center; 
}
</style>

</head>
<body>
	<div class="container" >
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Asaas</a></p> <br>
			<div class="input-group">
				<input type="text" placeholder="Enter Your Username" name="userName" value="<?php echo $_POST['userName']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Enter Your Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="Login" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
	<footer class="sticky-footer bg-white">
    <div class="footer my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Asaas </span>
                    </div>
                </div> 
				</footer>

	
</body>

</html>