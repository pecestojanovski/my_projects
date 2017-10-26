<?php
include 'route.php';
include 'etc/home.php';
include 'etc/about.php';
include 'etc/contact.php';

$route = new Route();

$route->add('/', function() {
	echo 'This is home';
});
$route->add('/about', function() {
	echo 'This is about';
});
$route->add('/contact', function() {
	echo 'This is contact';
});

$route->submit();