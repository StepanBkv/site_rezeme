<?php
	require_once 'connect.php';
	if(isset($_POST['exit'])) {
		$response = [];
		$response = ['message' => 'exit'];
		// $json = file_get_contents('php://input');
		// $data = json_decode($json);
		// $result = ["message" => $data->exit];
		header('Content-type: application/json');
		echo json_encode($response);
		unset($_SESSION['login']);
		unset($_SESSION['password']);
	}

	if (isset($_POST['login']) and isset($_POST['password'])) {
		$login = $_POST['login'];
		$password = md5($_POST['password']);
		$response = [];
		$check_user = mysqli_query($link, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
		if(mysqli_num_rows($check_user) > 0){
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
			$response = ['message' => 'Вы вошли!','location' => ' http://localhost:80/'];
			header('Content-type: application/json');
			echo json_encode($response);
		}
		else {
			$response = ['message' => 'Не верный логин или пароль.'];
			header('Content-type: application/json');
			echo json_encode($response);
		}
	}
?>