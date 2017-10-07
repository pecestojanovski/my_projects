<?php
session_start();
if($_SESSION['username'] != true) {
	header('location: login.php');
	exit;
}
require_once('connect.php');
$readSql = "SELECT * FROM crud_table";
$res = mysqli_query($connection, $readSql);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title>Car List</title>
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
	<div class="jumbotron" style="text-align: center;">
  		<h2><strong>Car List</strong></h2>
  	</div>
	<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    	<table class="table table-striped custab">
			<tr>
				<th>Car Brand</th>
				<th>Car Model</th>
				<th>Year Made</th>
				<th>Contributor</th>
				<th style="text-align: center;">Options</th>
			</tr>
			<?php
			while($row = mysqli_fetch_assoc($res)) {
				?>
			<tr>
				<td><?php echo $row['brand']; ?></td>
				<td><?php echo $row['model']; ?></td>
				<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['contributor']; ?></td>
				<td class="text-center"><a class='btn btn-info btn-xs' href="update.php?car_id=<?php echo $row['car_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Update</a>
				<a href="delete.php?car_id=<?php echo $row['car_id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
			</tr>
			<?php }
		 ?>
		</table>
	</div>
	</div>
</body>
</html>