<?php
class Controller_login extends Controller
{

	public function action_index()
	{	
		$this->view->generate('login_view.php');
	}

	public function redirect ($subject){
		echo $subject;
	}

	public function check_autorize_user(){
		return Model_login::check_autorize_user();
	}
}
?>