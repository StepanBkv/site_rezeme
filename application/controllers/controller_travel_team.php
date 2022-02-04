<?php
	Class Controller_travel_team extends Controller {

		function action_index()
		{	
			$this->view->generate('travel_team_view.php');
		}
	}
?>