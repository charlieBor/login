<?php 
	include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MYSQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

	<div class="header">
		<h2>Register</h2>
		<?php echo "Today is " . date("Y/m/d") . "<br>"; ?>		
	</div>

<form method="post" action="register.php">
	<?php include('errors.php'); ?>
	<div class="input-group">
		<label><i class='fas fa-user-alt' style="color: #5F9EA0"></i> Username</label>
		<input type="text" name="username"   placeholder="Username" style="color: red" value="<?php echo $username; ?>">	

	</div>

	<div class="input-group">
		<label><i class="fa fa-envelope" style="color: #5F9EA0"></i> Email</label>
		<input style="color: red" placeholder="Email" type="text" name="email" value="<?php echo $email; ?>">			
	</div>

	<div class="input-group">
		<label ><i class='fas fa-user-lock' style="color: #5F9EA0"></i> Password</label>
		<input style="color: red" type="password" name="password_1" placeholder="Password">			
	</div>

	<div class="input-group">
		<label><i class='fas fa-user-lock' style="color: #5F9EA0"></i> Confirm Password</label>
		<input type="password" name="password_2"  ="Confirm password">			
	</div>

	<div class="input-group">
		<button type="submit" name="register" class="btn"> Register</button>			
	</div>

	<p style="color: #5F9EA0">
		Already a member? <a href="login.php" style="color: #5F9EA0">Sign In</a>
	</p>
</form>

</body>
</html>