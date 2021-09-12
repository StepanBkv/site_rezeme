<?php
	class Controller {
	    function __construct()
		{
			$this->view = new View();
			//$this->model = new Model();
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
		function redirect($property){
			return $property;

		}
		// function check_autorize_user($property){
		// 	echo $property;
		// }
	}


?>