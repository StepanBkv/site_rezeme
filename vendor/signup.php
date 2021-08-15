<?php
	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$password = md5($_POST['password']);
	$response = [];
	$check_user = mysqli_query($link, "SELECT (`login`, `password`) FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
	if(mysqli_num_rows($check_user) > 0){
		$response = ['message' => 'Не верный логин или пароль.'];
		echo json_encode($response);
	}
	else {
		$response = ['message' => 'Не верный логин или пароль.', 'location' => '../index.php'];
		header('Content-type: application/json');
		echo json_encode($response);
	}
?>