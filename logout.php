<?php 
session_start();
if($_SESSION['username'] != true) {
  header('location: login.php');
  exit;
}
else {
  session_destroy();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
		<title>Log Out</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="list.php">Car List</a></li>
  <li role="presentation"><a href="create.php">Add a New Car</a></li>
  <li role="presentation"><a href="login.php">Login</a></li>
  <li role="presentation"><a href="register.php">Register</a></li>
  <li role="presentation" class="active"><a href="logout.php">Log Out</a></li>
</ul>
	<div class="alert alert-danger" role="alert">
	<p class="alert-link">Logged Out!</p>
</div>
</body>
</html>