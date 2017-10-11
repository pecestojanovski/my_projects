<?php
session_start();
if($_SESSION['username'] != true) {
	header('location: login.php');
	exit;
}
require_once('connect.php');
$car_id = $_GET['car_id'];
$res = mysqli_query($connection, "SELECT * FROM cars WHERE car_id=$car_id");
$row = mysqli_fetch_assoc($res);
if(isset($_POST) & !empty($_POST)){
	$CarBrand = mysqli_real_escape_string($connection, $_POST['CarBrand']);
	$CarModel = mysqli_real_escape_string($connection, $_POST['CarModel']);
	$CarYear = mysqli_real_escape_string($connection, $_POST['CarYear']);
	$CarContributor = mysqli_real_escape_string($connection, $_POST['CarContributor']); 

$res = mysqli_query($connection, "UPDATE cars SET brand='$CarBrand', model='$CarModel', year='$CarYear', contributor='$CarContributor' WHERE car_id=$car_id");
if($res) {
	header('location: list.php');
} else {
	echo "Data Not Updated";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
		<title>Update</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Home</a></li>
  <li role="presentation" class="active"><a href="list.php">Car List</a></li>
  <li role="presentation"><a href="create.php">Add a New Car</a></li>
  <li role="presentation"><a href="login.php">Login</a></li>
  <li role="presentation"><a href="register.php">Register</a></li>
  <li role="presentation"><a href="logout.php">Log Out</a></li>
</ul>
	<div id="form1">
	<div class="col-sm-8">
	<form role="form" method="post">
		<h1 style="text-align: center;">Update</h1>
	<div class="form-group float-label-control">
		<label>Brand</label>
		<input type="text" name="CarBrand" class="form-control" id="inputs" value="<?php while ($row = mysqli_fetch_assoc($res)) {
			echo "brand : $row ['brand']";
		} ?>" required/>
	<div>
		<label>Model</label>
		<input type="text" name="CarModel" class="form-control" id="inputs" value="<?php while($row = mysqli_fetch_assoc($res)) {
			echo "model : $row ['model']";
			} ?>" required/>
	</div>
	<div>
		<label>Year Made</label>
		<input type="text" name="CarYear" class="form-control" id="inputs" value="<?php while($row = mysqli_fetch_assoc($res)) {
			echo "year : $row ['year']";
			} ?>" required/>
	</div>
	<div>
		<label>Contributor</label>
		<input type="text" name="CarContributor" class="form-control" id="inputs" value="<?php while($row = mysqli_fetch_assoc($res)) {
			echo "contributor : $row ['contributor']";
			} ?>" required/>
	</div>
	<div id="buttonS">
		<button type="submit" value="submit" class="btn btn-info">Update</button>
	</div>
	</form>
	</div>
	</div>
	</div>
</body>
</html>