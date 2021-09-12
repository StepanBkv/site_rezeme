<?php
	class Controller_barrels extends Controller {
		public function action_index()
		{	
			$this->view->generate('barrels_view.php');
		}

		public function redirect ($subject){
			echo $subject;
		}

		public function check_autorize_user(){
			return Model_barrels::check_autorize_user();
		}
	} 
?>