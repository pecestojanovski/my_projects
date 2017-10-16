<?php
include 'model/model.php';

class controller
{
	public $id;
	public function __construct() {
		$this->id = new Model();
	}
	public function invoke()
	{
		if(!isset($_GET['car']))
		{
			$cars=$this->id->getCarDetails();
			include './view/carlist.php';
		}
		else 
		{
			$car=$this->id->getCar($_GET['car']);
			include './view/viewcar.php';
		}
	}
}
?>