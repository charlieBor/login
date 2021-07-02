<?php include('server.php'); 
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

?>
	

<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MYSQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<script>
	function enter() {
		document.getElementById("form-enter").submit();
	}
</script>
</head>
<body>
<table>
	<form name="form-enter" id="form-enter" action="" method="post" enctype="multipart/from-data">
		<tr>
			<td>Name:</td><td><input type="text" name="name"></td>
		</tr>
		<tr>
    <td>Age: </td><td><input type="text" name="age"/></td>
  </tr>
  <tr>
    <td>Temperature: </td><td><input type="number" name="temperature"/></td>
  </tr>
  <tr>
    <td>Picture: </td><td><input type="file" name="picture" id="picture"/></td>
  </tr>
  <tr>
    <td></td><td><button onclick="enter()">Upload</button></td>
  </tr>
</form>
</table>
		
	</form>
</table>


	<div class="header">
		<h2>Home page</h2>		
	</div>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
				 	echo $_SESSION['success'];
				 	unset($_SESSION['success']);
				 ?>
			</h3>

		</div>
	    <?php endif ?>
	    <?php if (isset($_SESSION["username"])): ?>
	    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
	    	<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
	<?php endif ?>
	</div>



</body>
</html>