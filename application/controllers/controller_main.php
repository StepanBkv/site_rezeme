<?php

class Controller_Main extends Controller
{

	public function action_index()
	{	
		$this->view->generate('main_view.php');
	}

	public function redirect ($subject){
		return $subject;
	}

	public function redirect_echo ($subject){
		echo $subject;
	}
	public function menu_body_list_account(){
		 echo Model_main::menu_body_list_account();
	}
}