<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['userName'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$userName = $_POST['userName'];
	$Password = ($_POST['Password']);
	$cpassword = ($_POST['cpassword']);

	if ($Password == $cpassword) {
		$sql = "SELECT * FROM users WHERE userName='$userName'";
		$result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (userName, Password)
					VALUES ('$userName','$Password')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				header("Location: index.php");
				$userName = "";
				$_POST['Password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! userName Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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

	<title>Asaas - User Registration</title>
<!-- background image -->
	<style>


body {
	background-image: url('img/backsvg.svg');
}



	</style>
<!-- end -->

	<style>
	.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
  
}</style>
	
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Asaas</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="userName" value="<?php echo $userName; ?>" required>
			</div>
			<!--<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>-->
			<div class="input-group">
				<input type="password" placeholder="Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>

            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
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