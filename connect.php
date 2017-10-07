<?php
$_GET['car_id'] = isset($_GET['car_id']) ? $_GET['car_id'] : "";

$dbServer = 'localhost';
$dbUserName = 'root';
$dbPassword	= 'teneo';
$dbName = 'crud';

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno){
	exit('Connection Error. Reason: '.$connection->connect_error);
}
?>