<?php
class Controller {
    function __construct()
	{
		$this->view = new View();
	}

	protected $model;
	protected $view;

	function __get($property) {
		return $property;
	}

	function __set($property, $value) {
		$property = $value;
	}
		
	function action_index()
	{
	}
}


?>