<?php
include 'controller/controller.php';
require_once('view/header.php');

$controller = new controller();
$controller->invoke();
?>