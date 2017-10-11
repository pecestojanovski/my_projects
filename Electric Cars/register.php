<?php 
session_start();
require('connect.php');
if(isset($_POST['register'])) {
	if(empty($_POST['username']) || empty($_POST['password'])) {
		echo 'Both fields are required';
	} else {
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);
		$password = password_hash($password, PASSWORD_DEFAULT);
		$query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
		if(mysqli_query($connection, $query)) {
			echo 'User ' . $username .' registered';
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
		<title>Register</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="list.php">Car List</a></li>
  <li role="presentation"><a href="create.php">Add a New Car</a></li>
  <li role="presentation"><a href="login.php">Login</a></li>
  <li role="presentation" class="active"><a href="register.php">Register</a></li>
  <li role="presentation"><a href="logout.php">Log Out</a></li>
</ul>
	<div class="jumbotron" style="text-align: center;">
  		<h2><strong>Register</strong></h2>
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
		<button type="submit" name="register" value="submit" class="btn btn-info">Register</button>
	</form>
	</div>
	</div>
</body>
</html>