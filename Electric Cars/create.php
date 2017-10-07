<?php
session_start();
if($_SESSION['username'] != true) {
	header('location: login.php');
	exit;
}
require_once('connect.php');
if(isset($_POST) & !empty($_POST)) {
	$CarBrand = mysqli_real_escape_string($connection, $_POST['CarBrand']);
	$CarModel = mysqli_real_escape_string($connection, $_POST['CarModel']);
	$CarYear = mysqli_real_escape_string($connection, $_POST['CarYear']);
	$CarContributor = mysqli_real_escape_string($connection, $_POST['CarContributor']);

$res = mysqli_query($connection, "INSERT INTO crud_table (brand, model, year, contributor) VALUES ('$CarBrand', '$CarModel', '$CarYear', '$CarContributor')");
if($res) {
	header('location: list.php');
} else {
	echo "Car Not Added";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
		<title>Add a New Car</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="list.php">Car List</a></li>
  <li role="presentation" class="active"><a href="create.php">Add a New Car</a></li>
  <li role="presentation"><a href="login.php">Login</a></li>
  <li role="presentation"><a href="register.php">Register</a></li>
  <li role="presentation"><a href="logout.php">Log Out</a></li>
</ul>
	<div class="jumbotron" style="text-align: center;">
  		<h2><strong>Add a New Car</strong></h2>
  	</div>
	<div id="form1">
	<div class="col-sm-8">
	<form method="post">
		
	<div class="form-group float-label-control">
		<label>Brand</label>
		<input type="text" name="CarBrand" class="form-control" id="inputs" required/>
	<div>
		<label>Model</label>
		<input type="text" name="CarModel" class="form-control" id="inputs" required/>
	</div>
	<div>
		<label>Year Made</label>
		<input type="text" name="CarYear" class="form-control" id="inputs" required/>
	</div>
	<div>
		<label>Contributor</label>
		<input type="text" name="CarContributor" class="form-control" id="inputs" required/>
	</div>
		<button type="submit" name="submit" value="submit" class="btn btn-default">Add</button>
	</form>
	</div>
	</div>
	</div>
</body>
</html>