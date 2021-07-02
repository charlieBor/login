<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MYSQL</title>
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

	<div class="header">
		<h2>Login</h2>		
	</div>

<form method="post" action="login.php">
	<?php include('errors.php'); ?>
	<div class="input-group">
		<label ><i class='fas fa-user-alt' style="color: #5F9EA0"></i> Username

		</label>
		
		<input type="text" name="username" placeholder="Username">			
	</div>

	<div class="input-group">
		<label><i class='fas fa-user-lock' style="color: #5F9EA0"></i> Password</label>
		<input type="password" name="password" placeholder="Password">			
	</div>

	<div class="input-group">
		<button type="submit" name="login" class="btn">Login</button>			
	</div>

	<p style="color: #5F9EA0">
		Not yet a member? <a href="register.php" style="color: #5F9EA0">Sign up</a>
	</p>
</form>

</body>
</html>