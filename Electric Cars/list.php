<?php
session_start();
if($_SESSION['username'] != true) {
	header('location: login.php');
	exit;
}
require_once('connect.php');
$readSql = "SELECT * FROM cars";
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
    <div class="row col-md-7 col-md-offset-2 custyle">
    	<table class="table table-striped custab" style="text-align: center;">
			<tr>
				<th>Car Brand</th>
				<th>Car Model</th>
				<th>Year Made</th>
				<th>Contributor</th>
				<th>Car Image</th>
				<th>Options</th>
			</tr>
			<?php
			while($row = mysqli_fetch_assoc($res)) {
				?>
			<tr>
				<td><?php echo $row['brand']; ?></td>
				<td><?php echo $row['model']; ?></td>
				<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['contributor']; ?></td>
				<?php echo "<td><img src='data:image/jpg;base64," .base64_encode($row['image'])."'/></td>"; ?>
				<td class="text-center"><a class='btn btn-info btn-s' href="update.php?car_id=<?php echo $row['car_id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
				<a href="delete.php?car_id=<?php echo $row['car_id']; ?>" class="btn btn-danger btn-s"><span class="glyphicon glyphicon-remove-circle"></span> Del</a></td>
			</tr>
			<?php }
		 ?>
		</table>
	</div>
	</div>
</body>
</html>