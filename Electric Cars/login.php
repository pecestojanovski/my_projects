<?php 
session_start();
require('connect.php');
if(isset($_POST['username']) && isset($_POST['password'])) {
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	
	$query = "SELECT * FROM admin WHERE username='$username'";
	$result = mysqli_query($connection, $query);
	
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			if(password_verify($password, $row['password'])) {
				$_SESSION['username'] = $username;
				echo 'You are logged in as ' . $username . '';
			} else {
				echo 'Wrong Credentials';
			}
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="list.php">Car List</a></li>
  <li role="presentation"><a href="create.php">Add a New Car</a></li>
  <li role="presentation" class="active"><a href="login.php">Login</a></li>
  <li role="presentation"><a href="register.php">Register</a></li>
  <li role="presentation"><a href="logout.php">Log Out</a></li>
</ul>
	<div class="jumbotron" style="text-align: center;">
  		<h2><strong>Log In</strong></h2>
  	</div>
	<div id="form1">
	<div class="col-sm-8">
	<form method="post">
	<div class="form-group float-label-control">
		<label>User</label>
		<input type="text" name="username" class="form-control" id="inputs" required/>
	<div>
		<label>Password</label>
		<input type="password" name="password" class="form-control" id="inputs" required/>
	</div>
		<button type="submit" name="submit" value="submit" class="btn btn-default">Login</button>
		
	</form>
	</div>
	</div>
</body>
</html>