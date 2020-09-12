<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Update Details</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Full Name</label>
			<input type="text" name="fullname" >
		</div>
		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" name="MobileNumber">
		</div>
		<div class="input-group">
			<select name="Plan">
				    <option value="Standard">--Select your plan--</option>
                    <option value="Standard">Standard</option>
				    <option value="Advanced">Advanced</option>
				    <option value="Pro">Pro</option>
		    </select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="Update_user">Register</button>
		</div>
		<p>
			Log Out <a href="index.php?logout='1'"></a>
		</p>
	</form>
</body>
</html>