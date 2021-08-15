<?php
#session_start();
require_once './vendor/connect.php';
$result = mysqli_query($link, "SELECT * FROM user");
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($data as $value) {
	print_r($value);
}
#if (mysqli_query($link, "INSERT INTO user (id, name, surname, sex) VALUES (NULL, 'Евгений', 'Бабаков', 'M')")) echo "Пользователь добавлен";
#else echo "Пользователь не добавлен: "  .  mysqli_error();
mysqli_close( $link );
echo $_SESSION['name'];