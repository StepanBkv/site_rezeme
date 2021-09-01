<?php

class Controller_account extends Controller
{

	function action_index()
	{	
		$this->view->generate('account_view.php');
	}
	function check_autorize_user(){
		return Model_account::check_autorize_user();
	}
}