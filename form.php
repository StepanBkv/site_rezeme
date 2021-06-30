<?php
	if(trim(!empty($_POST['name']))){
		$name = $_POST['name'];
	}
	$test = 'Ответ';
	$response = ['message' => $_POST['name']];
	header('Content-type: application/json');
	echo json_encode($response);

?>