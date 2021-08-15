<?php
session_start();
$host = 'localhost';
$user =  'native';
$password =  'native';
$db_name = 'users';
$link = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {
	echo 'Ошибка в подключению к базе данных '.mysqli_connect_errno(). "  ".mysqli_connect_error();
	exit();
}