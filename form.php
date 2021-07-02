<?php
	$arr = [
		'89002355541' => [
			"Имя" => "Степан", 
			"Фамилия" => "Бабаков"
		],
		'89284158551' => [
			"Имя" => "Евгений", 
			"Фамилия" => "Бабаков"
		],
		'89280475777' => [
			"Имя" => "Егор", 
			"Фамилия" => "Бабаков"
		],
	];
	if(trim(!empty($_POST['phone']))){
		$phone = $_POST['phone'];
	}
	foreach ($arr as $key => $value) {
		if($key == $phone)
			$message = "Приветствую вас ".$value['Имя']." ".$value['Фамилия']." !";
	}
	$response = ['message' => $message];
	header('Content-type: application/json');
	echo json_encode($response);

?>