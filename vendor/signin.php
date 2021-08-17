<?php
	require_once 'connect.php';
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$filePath = "";
	if (!empty($_FILES['image']['tmp_name'])) {
		//путь загрузки файла
		$filePath = "img/" . time() . $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], '../'.$filePath);
		//загрузим файл
	}

	if (mysqli_query ( $link,"INSERT INTO `user` (`id`, `name`, `surname`, `sex`, `login`, `password`, `email`, `phone`, `age`, `photo`) VALUES (NULL, '$name', '$surname', '$sex', '$login', '$password', '$email', '$phone', '$age', '$filePath')"))
	{
		$response = ['message' => 'Вы зарегистрировались!', 'location' => '../vendor/signup.html'];
	}
	else {
		$response = ['message' => 'Ошибка при регистрации!'.mysqli_connect_errno(). "  ".mysqli_connect_error(), 'location' => '../vendor/signin.html'];
	}
	header('Content-type: application/json');
	echo json_encode($response);