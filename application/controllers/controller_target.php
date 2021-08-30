<?php

class Controller_target extends Controller
{

	function action_index()
	{	
		$this->view->generate('target_view.php');
	}
}