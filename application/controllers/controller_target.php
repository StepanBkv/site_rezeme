<?php

class Controller_target extends Controller
{

	function action_index()
	{	
		$this->view->generate('target_view.php');
	}

	public function menu_body_list_account(){
		 echo Model_target::menu_body_list_account();
	}
}