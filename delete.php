<?php 
session_start();
if($_SESSION['username'] != true) {
	header('location: login.php');
	exit;
}
require_once('connect.php');
$car_id = $_GET['car_id'];
$res = mysqli_query($connection, "DELETE FROM crud_table WHERE car_id=$car_id");
$row = mysqli_fetch_assoc($res);
if($res) {
	header('location: list.php');
} else {
	echo "Data Not Deleted";
}
var_dump($res);
?>