<?php

class Controller_parallax extends Controller
{

	function action_index()
	{	
		$this->view->generate('parallax_view.php');
	}
}

?>