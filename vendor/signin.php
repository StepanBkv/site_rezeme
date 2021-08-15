<?php
	session_start();
	require_once 'connect.php';
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	if (!empty($_FILES['image']['tmp_name'])) {
		//путь загрузки файла
		$filePath = "img/" . time() . $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], '../'.$filePath);
		//загрузим файл
		}
	}
	mysql_query($link,"INSERT INTO `user` (`id`, `name`, `surname`, `sex`, `login`, `password`, `email`, `age`, `photo`) VALUES (NULL, '$name', '$surname', '$sex', '$login', '$password', '$email', '$age', '$filePath')");
