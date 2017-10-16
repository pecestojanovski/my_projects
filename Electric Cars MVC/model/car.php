<?php

class Car
{
	public $name;
	public $model;
	public $year;
	public $description;
	public $image;

	public function __construct($name, $model, $year, $description, $image) {
		$this->name = $name;
		$this->model = $model;
		$this->year = $year;
		$this->description = $description;
		$this->image = $image;
	}
}
?>