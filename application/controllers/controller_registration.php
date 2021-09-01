<?php
class Controller_registration extends Controller
{

	public function action_index()
	{	
		$this->view->generate('registration_view.php');
	}

	public function redirect ($subject){
		 return $subject;
	}

}
?>