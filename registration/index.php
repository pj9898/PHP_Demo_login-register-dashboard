<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<br>
			<h2>Your Details</h2>
			<br>
			        <ol type="1">
			        	<br>
					  <li><h3>FULL NAME:-</h3><?php echo $_SESSION['fullname']; ?></li>
					  <br>
					  <li><h3>MOBILE NUMBER:-</h3><?php echo $_SESSION['MobileNumber']; ?></li>
					  <br>
					  <li><h3>PLAN YOU SELCTED:-</h3><?php echo $_SESSION['Plan']; ?></li>
					  <br>
					  <li><h3>EMAIL:-</h3><?php echo $_SESSION['email']; ?></li>
					  <br>
					</ol> 
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<p> <a href="UpdateDetails.php" style="color: red;">UpdateDetails</a> </p>
		<?php endif ?>
	</div>	
</body>
</html>